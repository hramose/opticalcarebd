<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;
use Datatables;
use Validator;
use Response;

class ContactlensController extends Controller
{
    public function contactlens()
    {
         return view('admin.stock.contactlens');
    }

    public function getContactlens(Request $request)
    {
        return Datatables::eloquent(Stock::where('product_type','contactlens')->orderBy('id','desc'))->make(true);
    }
    public function addContactlens(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $contactlens = new Stock;
            $contactlens->category = $request->category;
            $contactlens->quantity = $request->quantity;
            $contactlens->product_type = "contactlens";
            $contactlens->save();
            return response()->json($contactlens);
        }
    }
    public function updateContactlens(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'newQuantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $contactlens = Stock::find($id);
            $NewQuantity = $contactlens->quantity + $request->newQuantity;
            $contactlens->quantity = $NewQuantity;
            $contactlens->save();
            return response()->json($contactlens);            
        }
        
    }
    public function editContactlens(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $contactlens = Stock::find($id);
            $contactlens->category = $request->category;
            $contactlens->quantity = $request->quantity;
            $contactlens->save();
            return response()->json($contactlens);
        }
    }
    public function deleteContactlens(Request $request)
    {
        Stock::where('id',$request->id)->delete();
        return 'Delete Done';
    }
}
