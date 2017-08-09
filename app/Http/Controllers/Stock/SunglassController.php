<?php

namespace App\Http\Controllers\Stock;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;
use Datatables;
use Validator;
use Response;

class SunglassController extends Controller
{
    public function sunglass()
    {
         return view('admin.stock.sunglass');
    }

    public function getSunglass(Request $request)
    {
        return Datatables::eloquent(Stock::where('product_type','sunglass')->orderBy('id','desc'))->make(true);
    }
    public function addSunglass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $sunglass = new Stock;
            $sunglass->category = $request->category;
            $sunglass->quantity = $request->quantity;
            $sunglass->product_type = "sunglass";
            $sunglass->save();
            return response()->json($sunglass);
        }
    }
    public function updateSunglass(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'newQuantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $sunglass = Stock::find($id);
            $NewQuantity = $sunglass->quantity + $request->newQuantity;
            $sunglass->quantity = $NewQuantity;
            $sunglass->save();
            return response()->json($sunglass);            
        }
        
    }
    public function editSunglass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $sunglass = Stock::find($id);
            $sunglass->category = $request->category;
            $sunglass->quantity = $request->quantity;
            $sunglass->save();
            return response()->json($sunglass);
        }
    }
    public function deleteSunglass(Request $request)
    {
        Stock::where('id',$request->id)->delete();
        return 'Delete Done';
    }
}
