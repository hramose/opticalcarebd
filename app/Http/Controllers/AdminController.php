<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sell;
use App\Stock;
use App\Expense;
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

        $TTSell = Sell::select(DB::raw('SUM(total) as total'))->where('sells_date',DB::raw('curdate()'))->first();
        $TTAdvance = Sell::select(DB::raw('SUM(advance) as total'))->where('sells_date',DB::raw('curdate()'))->first();
        $TTDPay = Sell::select(DB::raw('SUM(due_payment) as total'))->where('due_payment_date',DB::raw('curdate()'))->first();
        $TTExpenses = Expense::select(DB::raw('SUM(amount) as total'))->where('date',DB::raw('curdate()'))->first();

       return view('admin.dashboard',compact('frameCategory','frameQuantity','sunglassCategory','sunglassQuantity','contactLensCategory','contactLensQuantity','plasticLensCategory','plasticLensQuantity','due','Tdeliverys','TdeliverysCount','TTSell','TTAdvance','TTDPay','TTExpenses'));
// dd($delivery);
   }
   public function getDue()
   {
    return Datatables::eloquent(Sell::where('status','Due')->orderBy('id','desc'))->make(true);
   }
}
