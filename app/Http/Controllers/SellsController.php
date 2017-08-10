<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Sell;
class SellsController extends Controller
{
    public function index()
    {
        return view('admin.sells');
    }
    public function getSells()
    {   
        return Datatables::eloquent(Sell::query())->make(true);   
    }
    public function deleteSells(Request $requests)
    {
        Sell::where('id',$requests->id)->delete();
        return 'Delete Done';
    }
}
