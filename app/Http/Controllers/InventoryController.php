<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inventory;
use App\InvInOut;
use Auth;

class InventoryController extends Controller
{
    public function main_list(){
        $inventories = Inventory::paginate(10);
        return view('inventory.list')->with('inventories',$inventories);
    }
    public function branch_list(){
        $inventories = InvInOut::where('branch_id',Auth::user()->branch_id)->where('stock','!=', 0)->paginate(10);
        return view('inventory.branch_list')->with('inventories',$inventories)->with('branch',Auth::user()->branch_id);
    }

    public function branchOutOfStock_list(){
        $inventories = InvInOut::where('branch_id',Auth::user()->branch_id)->where('stock', 0)->paginate(10);
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
            $inv->updated_at = now();
            $inv->save();        
            return redirect()->back()->with('success','Product Stock Added!');
        
    }
}
