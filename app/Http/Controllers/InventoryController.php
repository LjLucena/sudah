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
        $inventories = InvInOut::where('branch_id',Auth::user()->branch_id)->paginate(10);
        return view('inventory.list')->with('inventories',$inventories);
    }
}
