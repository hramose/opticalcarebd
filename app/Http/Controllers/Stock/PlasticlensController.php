<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;
use Datatables;
use Validator;
use Response;

class PlasticlensController extends Controller
{
    public function plasticlens()
    {
         return view('admin.stock.plasticlens');
    }

    public function getPlasticlens(Request $request)
    {
        return Datatables::eloquent(Stock::where('product_type','plasticlens')->orderBy('id','desc'))->make(true);
    }
    public function addPlasticlens(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $plasticlens = new Stock;
            $plasticlens->category = $request->category;
            $plasticlens->quantity = $request->quantity;
            $plasticlens->product_type = "plasticlens";
            $plasticlens->save();
            return response()->json($plasticlens);
        }
    }
    public function updatePlasticlens(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'newQuantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $plasticlens = Stock::find($id);
            $NewQuantity = $plasticlens->quantity + $request->newQuantity;
            $plasticlens->quantity = $NewQuantity;
            $plasticlens->save();
            return response()->json($plasticlens);            
        }
        
    }
    public function editPlasticlens(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $plasticlens = Stock::find($id);
            $plasticlens->category = $request->category;
            $plasticlens->quantity = $request->quantity;
            $plasticlens->save();
            return response()->json($plasticlens);
        }
    }
    public function deletePlasticlens(Request $request)
    {
        Stock::where('id',$request->id)->delete();
        return 'Delete Done';
    }
}
