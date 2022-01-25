<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inventory;
use App\InvInOut;
use App\Category;
use App\User;
use App\ActivityLog;
use Auth;

class InventoryController extends Controller
{
    public function main_list(){
        $inventories = Inventory::where('stat', 1)->where('quantity','!=',0)->paginate(10);
        return view('inventory.list')->with('inventories',$inventories);
    }
    public function branch_list(){
        $inventories = InvInOut::where('branch_id',Auth::user()->branch_id)->where('stock','!=', 0)->paginate(10);
        return view('inventory.branch_list')->with('inventories',$inventories)->with('branch',Auth::user()->branch_id);
    }

    public function branchOutOfStock_list(){
        $inventories = InvInOut::where('branch_id',Auth::user()->branch_id)->where('stock', 0)->where('stat',1)->paginate(10);
        return view('inventory.outofstock')->with('inventories',$inventories)->with('branch',Auth::user()->branch_id);
    }

    public function add_branchInventory(){
        $branchInventory = InvInOut::where('branch_id',Auth::user()->branch_id)->get();
        /*foreach($branchInventory as $branchInventory){            
            $disable[] = $branchInventory->inventory_id;
        }*/

        $inventories = Inventory::where('stat',1)->get();
        
        return view('inventory.form')->with('inventories',$inventories)->with('branch',Auth::user()->branch_id);
    }

    public function save_branchInventory(Request $request){
        $check = InvInOut::where('branch_id',Auth::user()->branch_id)->where('inventory_id',$request->product)->first();
        
        if(empty($check)){
            $inv = new InvInOut;
            $inv->inventory_id = $request->product;
            $inv->branch_id = Auth::user()->branch_id;
            $inv->in = $request->in;
            $inv->out = 0;
            $inv->stock = $request->in;
            $inv->stat = 1;
            $inv->save();        
            return redirect()->back()->with('success','Product Added!');
        }
        else {    
            return redirect()->back()->with('fail','Product already exists in Inventory!');
        }
        
    }

    public function add_stock(Request $request){
        $inv = InvInOut::where('branch_id',Auth::user()->branch_id)->where('inventory_id',$request->product)->first();
        
            $inv->in = $request->in;
            $inv->stock = $request->in;
            $inv->save();        

            $main_inv = Inventory::find($inv->inventory_id);
            $main_inv->quantity = $main_inv->quantity - $request->in;
            $main_inv->save();

            return redirect()->back()->with('success','Product Stock Added!');
        
    }

    public function branchInventory_update(Request $request){
        $inv = InvInOut::find($request->product);
        $in = $inv->in;
        $out = $inv->out;
        if($request->in == 0){
            if ($request->out == 0) {
                return redirect()->back()->with('fail','Nothing Changes');
            } else {
                $inv->stock = $inv->stock - $request->out;
                $inv->out = $request->out;
                $inv->save();

                $main_inv = Inventory::find($inv->inventory_id);
                $main_inv->total_sales = $main_inv->total_sales + $request->out;
                $main_inv->save();

                $activity = new ActivityLog;
                $activity->user_id = Auth::user()->id;
                $activity->activity = "Branch product ".$main_inv->product_name."-out updated.";
                $activity->save();

                return redirect()->back()->with('success','Product "Out" Updated!');
            }           
        }
        elseif($request->out == 0){
            if ($request->in == 0) {
                return redirect()->back()->with('fail','Nothing Changes');
            } else {
                $stock = $inv->stock + $in;
                $inv->in = $request->in;
                $inv->stock = $stock;
                $inv->save();
    
                $main_inv = Inventory::find($inv->inventory_id);
                $main_inv->quantity = $main_inv->quantity - $request->in;
                $main_inv->save();

                $activity = new ActivityLog;
                $activity->user_id = Auth::user()->id;
                $activity->activity = "Branch product ".$main_inv->product_name."-in updated.";
                $activity->save();
    
                return redirect()->back()->with('success','Product "In" Updated!');
            }
        }
        else{
            $stock = ($inv->stock + $request->in) - $request->out;
            $inv->in = $request->in;
            $inv->out = $request->out;
            $inv->stock = $stock;
            $inv->save();

            $main_inv = Inventory::find($inv->inventory_id);
            $main_inv->quantity = $main_inv->quantity - $request->in;
            $main_inv->total_sales = $main_inv->total_sales + $request->out;
            $main_inv->save();

            $activity = new ActivityLog;
            $activity->user_id = Auth::user()->id;
            $activity->activity = "Branch product ".$main_inv->product_name."-in & out updated.";
            $activity->save();

            return redirect()->back()->with('success','Inventory Updated!');
        }
        
    }
    
    public function inventory_edit($id){
            
        $inv = Inventory::find($id);
        $categories = Category::all();
        return view('inventory.edit_inv')->with('inv',$inv)->with('categories', $categories);
    }

    public function inventory_update(Request $request){
            
        $inv = Inventory::find($request->id);
        $inv->category_id = $request->cat;
        $inv->product_name = $request->name;
        $inv->code = $request->code;
        $inv->price = $request->price;
        $inv->quantity = $request->qty;
        $inv->remarks = $request->remarks;
        $inv->save();
        return redirect()->back()->with('success','Inventory Updated!');
    }

    public function outOfStock(){
        $inv = Inventory::where('quantity', 0)->paginate(10);
        return view('inventory.outofstock_list')->with('inventories',$inv);
    }

    public function stock(Request $request){
        $inv = Inventory::find($request->id);
        
        $inv->quantity = $request->qty;
        $inv->save();        
        return redirect()->back()->with('success','Product Stock Added!');
        
    }

    public function archive_list(){
        if(Auth::user()->role_id == 4){
            $inv = Inventory::where('stat', 0)->paginate(10);
            return view('inventory.archives')->with('inventories',$inv);
        }
        else{            
            $inv = InvInOut::where('stat', 0)->paginate(10);
            return view('inventory.branch_archives')->with('inventories',$inv);
        }
    }

    public function archive($id){
        $branchInv = InvInOut::where('inventory_id',$id)->get(['stat','id']);
        foreach($branchInv as $branchInv){
            $setStat = InvInOut::find($branchInv->id);
            $setStat->stat = 0;
            $setStat->save();
        }
        
        $inv = Inventory::find($id);
        $inv->stat = 0;
        $inv->save();
        return redirect()->back()->with('success','Product Archived!');
    }

    public function activate($id){
        $branchInv = InvInOut::where('inventory_id',$id)->get(['stat','id']);
        foreach($branchInv as $branchInv){
            $setStat = InvInOut::find($branchInv->id);
            $setStat->stat = 1;
            $setStat->save();
        }

        $inv = Inventory::find($id);
        $inv->stat = 1;
        $inv->save();
        return redirect()->back()->with('success','Product Activated!');
    }

    public function addInventory(){
        $cat = Category::all();
        return view('inventory.add_inventory')->with('categories',$cat);
    }

    public function saveInventory(Request $request){
            $inv = new Inventory;
            $inv->category_id = $request->cat;
            $inv->product_name = $request->name;
            $inv->code = $request->code;
            $inv->price = $request->price;
            $inv->quantity = $request->qty;
            $inv->remarks = $request->remarks;
            $inv->stat = 1;
            $inv->save();
           return redirect()->back()->with('success','Inventory Added!');
        
    }

    
}
