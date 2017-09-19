<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sell;
use App\Expense;
use DB;
use App\Stock;
use App\Daycloseup;
use Datatables;
use Validator;
use Response;
class DaycloseupController extends Controller
{
    public function index()
    {
      $TTSell = Sell::select(DB::raw('SUM(total) as total'))->where('sells_date',DB::raw('curdate()'))->first();
      $TTAdvance = Sell::select(DB::raw('SUM(advance) as total'))->where('sells_date',DB::raw('curdate()'))->first();
      $TTDPay = Sell::select(DB::raw('SUM(due_payment) as total'))->where('due_payment_date',DB::raw('curdate()'))->first();
      $TTExpenses = Expense::select(DB::raw('SUM(amount) as total'))->where('date',DB::raw('curdate()'))->first();


      return view('admin.daycloseup',compact('TTSell','TTAdvance','TTDPay','TTExpenses'));
      // return $TTSell.$TTAdvance.$TTDPay.$TTExpenses;
    }
    public function getData()
    {
      return Datatables::eloquent(Daycloseup::query())->make(true);

    }
    public function addData(Request $request)
    {
      $validator = Validator::make($request->all(), [
            'date' => 'required|unique:daycloseups',
            'sell' => 'required|numeric',
            'advance' => 'required|numeric',
            'duepay' => 'required|numeric',
            'expenses' => 'required|numeric',
            'visa' => 'required|numeric',
            'balance' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $daycloseup = new Daycloseup;
            $daycloseup->date = $request->date;
            $daycloseup->total_sells = $request->sell;
            $daycloseup->total_advance = $request->advance;
            $daycloseup->total_due_payment = $request->duepay;
            $daycloseup->total_expenses = $request->expenses;
            $daycloseup->total_visa = $request->visa;
            $daycloseup->balance = $request->balance;
            $daycloseup->save();
            return response()->json($daycloseup);
        }
    }

    public function delete(Request $request)
    {
       Daycloseup::where('id', $request->id)->delete();
       return "Delete Done";
    }
}
