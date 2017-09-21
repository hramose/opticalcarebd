<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sell;
use App\Stock;
use DB;
use Datatables;
class AdminController extends Controller
{
   public function admin ()
   {
    //    frame
        $frameCategory = Stock::where('product_type','frame')->count();
        $frameQuantity = Stock::select(DB::raw('SUM(quantity) as quantity'))->where('product_type','frame')->first();
        //    Sunglass
        $sunglassCategory = Stock::where('product_type','sunglass')->count();
        $sunglassQuantity = Stock::select(DB::raw('SUM(quantity) as quantity'))->where('product_type','sunglass')->first();
        //    Contact Lens
        $contactLensCategory = Stock::where('product_type','contactlens')->count();
        $contactLensQuantity = Stock::select(DB::raw('SUM(quantity) as quantity'))->where('product_type','contactlens')->first();
        //    Sunglass
        $plasticLensCategory = Stock::where('product_type','plasticlens')->count();
        $plasticLensQuantity = Stock::select(DB::raw('SUM(quantity) as quantity'))->where('product_type','plasticlens')->first();

        $due = Sell::where('status','Due')->count();

        //Today DELIVERY
        $Tdeliverys = Sell::where('delivery_date',DB::raw('curdate()'))->get();
        $TdeliverysCount = Sell::where('delivery_date',DB::raw('curdate()'))->count();

       return view('admin.dashboard',compact('frameCategory','frameQuantity','sunglassCategory','sunglassQuantity','contactLensCategory','contactLensQuantity','plasticLensCategory','plasticLensQuantity','due','Tdeliverys','TdeliverysCount'));
// dd($delivery);
   }
   public function getDue()
   {
    return Datatables::eloquent(Sell::where('status','Due')->orderBy('id','desc'))->make(true);
   }
}
