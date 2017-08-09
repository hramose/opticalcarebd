<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use Datatables;
use Validator;
use Response;

class StockController extends Controller
{

    public function frame()
    {
        return view('admin.stock.frame');
    }
    public function getFrame()
    {
        // $frames = Stock::where('product_type','frame')->orderBy('id','asc')->get();
        return Datatables::eloquent(Stock::where('product_type','frame')->orderBy('id','asc'))->make(true);
        
    }
    public function addFrame(Request $request)
    {
        $this->validate($request,[
            'category' => 'required'|'unique:stocks',
            'quantity' => 'required',
           ]);
        $frame = new Stock;
        $frame->category = $request->category;
        $frame->quantity = $request->quantity;
        $frame->product_type = "frame";
        $frame->save();
        return 'added';
    }
    public function editFrame(Request $request)
    {
        $id = $request->id;
        $frame = Stock::find($id);
        $frame->category = $request->category;
        $frame->quantity = $request->quantity;
        $frame->save();
        return 'Saved';
    }
    public function updateFrame(Request $request)
    {
        $id = $request->id;
        $frame = Stock::find($id);
        $frame->quantity = $request->newQuantity;
        $frame->save();
        return 'Updated';
    }
    public function deleteFrame(Request $request)
    {
        Stock::where('id',$request->id)->delete();
        return 'Delete Done';
    }
    public function sunglass()
    {
        $sunglasses = Stock::where('product_type','sunglass')->orderBy('id','desc')->get();
         return view('admin.stock.sunglass',compact('sunglasses'));
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
    public function contactlans()
    {
        $contactlanses = Stock::where('product_type', 'contactlans')->orderBy('id','desc')->get();
        return view('admin.stock.contactlans',compact('contactlanses'));
    }
}
