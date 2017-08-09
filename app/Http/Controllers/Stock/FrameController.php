<?php

namespace App\Http\Controllers\Stock;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;
use Datatables;
use Validator;
use Response;

class FrameController extends Controller
{
    public function frame()
    {
         return view('admin.stock.frame');
    }

    public function getFrame(Request $request)
    {
        return Datatables::eloquent(Stock::where('product_type','frame')->orderBy('id','desc'))->make(true);
    }
    public function addFrame(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $frame = new Stock;
            $frame->category = $request->category;
            $frame->quantity = $request->quantity;
            $frame->product_type = "frame";
            $frame->save();
            return response()->json($frame);
        }
    }
    public function updateFrame(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'newQuantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $frame = Stock::find($id);
            $NewQuantity = $frame->quantity + $request->newQuantity;
            $frame->quantity = $NewQuantity;
            $frame->save();
            return response()->json($frame);            
        }
        
    }
    public function editFrame(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:2|unique:stocks',
            'quantity' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $frame = Stock::find($id);
            $frame->category = $request->category;
            $frame->quantity = $request->quantity;
            $frame->save();
            return response()->json($frame);
        }
    }
    public function deleteFrame(Request $request)
    {
        Stock::where('id',$request->id)->delete();
        return 'Delete Done';
    }
}
