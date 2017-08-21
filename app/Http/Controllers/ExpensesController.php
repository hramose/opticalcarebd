<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use Illuminate\Support\Facades\Input;
use DB;
class ExpensesController extends Controller
{
    public function index()
    {
        $expense = Expense::select("date", DB::raw('SUM(amount) as total'))->groupBy('date')->get();
        return view('admin.expenses.expenses',compact('expense'));
    }
    
    public function newExpenses(Request $request)
    {
        $input = Input::all();
        $condition = $input['date'];
        foreach ($condition as $key => $condition) {
            $expense = new Expense;          
            $expense->date = $input['date'][$key];            
            $expense->expenses_name = $input['expense_name'][$key];
            $expense->amount = $input['taka'][$key];
            $expense->save();
        }
        return redirect()->back()->with(['message' => 'Expenses successfully save.']);
    }
    public function expensesDetails($date)
    {
      $expense = Expense::where('date',$date)->get();
      return view('admin.expenses.expensesdetails',compact('expense'));
    }
    public function delete(Request $request)
    {
        Expense::where('id',$request->id)->delete();
        return 'Delete Done';
    }
}
