<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Sell;
use App\Stock;
use Validator;
use Response;
class SellsController extends Controller
{
    public function index()
    {
        return view('admin.sells.sells');
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
    public function sellDetails(Request $request,$id)
    {
        $sell = Sell::findOrFail($id);
        return view('admin.sells.selldetails',compact('sell'));
    }
    public function customerCopy(Request $request,$id)
    {
        $sell = Sell::findOrFail($id);
        return view('admin.sells.customercopy', compact('sell'));
    }
    public function payDue(Request $request)
    {
        $less  = $request->Less;
        if ($less == "") {
            $status = $request->Status;
        } else {
            $status  = $less;
        }
        $validator = Validator::make($request->all(),[
            'Date' => 'required',
            'PayDue' => 'required',
            'Due' => 'required',
            'Status' => 'required',
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' =>
            $validator->getMessageBag()->toArray()));
        } else {
               $sell = Sell::where('order_no',$request->order_no)->first();              
                $sell->due = $request->Due;
                $sell->due_payment = $request->PayDue;
                $sell->due_payment_date = $request->Date;
                $sell->status = $status;
                $sell->save();
                return response()->json($sell);            
          
        }
    }
    public function sellFrame()
    {
        $categorys = Stock::where('product_type','frame')->orderBy('id','desc')->get();        
        return view('admin.sells.sellframe',compact('categorys'));
    }
    public function newSellFrame(Request $request)
    {
        $less  = $request->Less;
        if ($less == "") {
            $status = $request->Status;
        } else {
            $status  = $less;
        }
        $validator = Validator::make($request->all(),[
            'order_no' => 'required|numeric|unique:sells',
            'SellsDate' => 'required',
            'Phone' => 'nullable|min:11',
            'Category' => 'required',
            'Quantity' => 'required|numeric',
            'Total' => 'required',
            'Advance' => 'required',
            'Due' => 'required',
            'Status' => 'required',
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' =>
            $validator->getMessageBag()->toArray()));
        } else {
            $newQuantity = $request->Quantity;
            $stock = Stock::where('product_type','frame')->where('category',$request->Category)->first();
            $oldQuantity = $stock->quantity;
            if ($oldQuantity >= $newQuantity && $newQuantity >= 1) {
                $stock->quantity = $oldQuantity - $newQuantity;
                $stock->save();
                $sell = new Sell;
                $sell->product_type = "frame";
                $sell->product_category = $request->Category;
                $sell->customer_name = $request->CustomerName;
                $sell->phone = $request->Phone;
                $sell->address = $request->Address;
                $sell->order_no = $request->order_no;
                $sell->sells_date = $request->SellsDate;
                $sell->right_sph = $request->RightSPH;
                $sell->right_cyl = $request->RightCYL;
                $sell->right_axis = $request->RightAxis;
                $sell->right_add = $request->RightADD;
                $sell->left_sph = $request->LeftSPH;
                $sell->left_cyl = $request->LeftCYL;
                $sell->left_axis = $request->LeftAxis;
                $sell->left_add = $request->LeftADD;
                $sell->ipd = $request->IPD;
                $sell->delivery_date = $request->DeliveryDate;
                $sell->quantity = $request->Quantity;
                $sell->total = $request->Total;
                $sell->advance = $request->Advance;
                $sell->due = $request->Due;
                $sell->status = $status;
                $sell->note_about_lens = $request->NoteAL;
                $sell->note_about_customer = $request->NoteAC;
                $sell->save();
                return response()->json($sell);            
            } else {
                return response()->json(['errorsR' => 'Quantity is out of stock']);
            }
        }
    }
    public function sellSunglass()
    {
        $categorys = Stock::where('product_type','sunglass')->orderBy('id','desc')->get();        
        return view('admin.sells.sellsunglass',compact('categorys'));
    }
    public function newSellSunglass(Request $request)
    {
        $less  = $request->Less;
        if ($less == "") {
            $status = $request->Status;
        } else {
            $status  = $less;
        }
        $validator = Validator::make($request->all(),[
            'order_no' => 'required|numeric|unique:sells',
            'SellsDate' => 'required',
            'Phone' => 'nullable|min:11',
            'Category' => 'required',
            'Quantity' => 'required|numeric',
            'Total' => 'required',
            'Advance' => 'required',
            'Due' => 'required',
            'Status' => 'required',
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' =>
            $validator->getMessageBag()->toArray()));
        } else {
            $newQuantity = $request->Quantity;
            $stock = Stock::where('product_type','sunglass')->where('category',$request->Category)->first();
            $oldQuantity = $stock->quantity;
            if ($oldQuantity >= $newQuantity && $newQuantity >= 1) {
                $stock->quantity = $oldQuantity - $newQuantity;
                $stock->save();
                $sell = new Sell;
                $sell->product_type = "sunglass";
                $sell->product_category = $request->Category;
                $sell->customer_name = $request->CustomerName;
                $sell->phone = $request->Phone;
                $sell->address = $request->Address;
                $sell->order_no = $request->order_no;
                $sell->sells_date = $request->SellsDate;
                $sell->right_sph = $request->RightSPH;
                $sell->right_cyl = $request->RightCYL;
                $sell->right_axis = $request->RightAxis;
                $sell->right_add = $request->RightADD;
                $sell->left_sph = $request->LeftSPH;
                $sell->left_cyl = $request->LeftCYL;
                $sell->left_axis = $request->LeftAxis;
                $sell->left_add = $request->LeftADD;
                $sell->ipd = $request->IPD;
                $sell->delivery_date = $request->DeliveryDate;
                $sell->quantity = $request->Quantity;
                $sell->total = $request->Total;
                $sell->advance = $request->Advance;
                $sell->due = $request->Due;
                $sell->status = $status;
                $sell->note_about_lens = $request->NoteAL;
                $sell->note_about_customer = $request->NoteAC;
                $sell->save();
                return response()->json($sell);            
            } else {
                return response()->json(['errorsR' => 'Quantity is out of stock']);
            }
        }
    }
    public function sellContactlens()
    {
        $categorys = Stock::where('product_type','contactlens')->orderBy('id','desc')->get();        
        return view('admin.sells.sellcontactlens',compact('categorys'));
    }
    public function newSellContactlens(Request $request)
    {
        $less  = $request->Less;
        if ($less == "") {
            $status = $request->Status;
        } else {
            $status  = $less;
        }
        $validator = Validator::make($request->all(),[
            'order_no' => 'required|numeric|unique:sells',
            'SellsDate' => 'required',
            'Phone' => 'nullable|min:11',
            'Category' => 'required',
            'Quantity' => 'required|numeric',
            'Total' => 'required',
            'Advance' => 'required',
            'Due' => 'required',
            'Status' => 'required',
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' =>
            $validator->getMessageBag()->toArray()));
        } else {
            $newQuantity = $request->Quantity;
            $stock = Stock::where('product_type','contactlens')->where('category',$request->Category)->first();
            $oldQuantity = $stock->quantity;
            if ($oldQuantity >= $newQuantity && $newQuantity >= 1) {
                $stock->quantity = $oldQuantity - $newQuantity;
                $stock->save();
                $sell = new Sell;
                $sell->product_type = "contactlens";
                $sell->product_category = $request->Category;
                $sell->customer_name = $request->CustomerName;
                $sell->phone = $request->Phone;
                $sell->address = $request->Address;
                $sell->order_no = $request->order_no;
                $sell->sells_date = $request->SellsDate;
                $sell->right_sph = $request->RightSPH;
                $sell->right_cyl = $request->RightCYL;
                $sell->right_axis = $request->RightAxis;
                $sell->right_add = $request->RightADD;
                $sell->left_sph = $request->LeftSPH;
                $sell->left_cyl = $request->LeftCYL;
                $sell->left_axis = $request->LeftAxis;
                $sell->left_add = $request->LeftADD;
                $sell->ipd = $request->IPD;
                $sell->delivery_date = $request->DeliveryDate;
                $sell->quantity = $request->Quantity;
                $sell->total = $request->Total;
                $sell->advance = $request->Advance;
                $sell->due = $request->Due;
                $sell->status = $status;
                $sell->note_about_lens = $request->NoteAL;
                $sell->note_about_customer = $request->NoteAC;
                $sell->save();
                return response()->json($sell);            
            } else {
                return response()->json(['errorsR' => 'Quantity is out of stock']);
            }
        }
    }
    public function sellPlasticlens()
    {
        $categorys = Stock::where('product_type','plasticlens')->orderBy('id','desc')->get();        
        return view('admin.sells.sellplasticlens',compact('categorys'));
    }
    public function newSellPlasticlens(Request $request)
    {
        $less  = $request->Less;
        if ($less == "") {
            $status = $request->Status;
        } else {
            $status  = $less;   
        }
        $validator = Validator::make($request->all(),[
            'order_no' => 'required|numeric|unique:sells',
            'SellsDate' => 'required',
            'Phone' => 'nullable|min:11',
            'Category' => 'required',
            'Quantity' => 'required|numeric',
            'Total' => 'required',
            'Advance' => 'required',
            'Due' => 'required',
            'Status' => 'required',
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' =>
            $validator->getMessageBag()->toArray()));
        } else {
            $newQuantity = $request->Quantity;
            $stock = Stock::where('product_type','plasticlens')->where('category',$request->Category)->first();
            $oldQuantity = $stock->quantity;
            if ($oldQuantity >= $newQuantity && $newQuantity >= 1) {
                $stock->quantity = $oldQuantity - $newQuantity;
                $stock->save();
                $sell = new Sell;
                $sell->product_type = "plasticlens";
                $sell->product_category = $request->Category;
                $sell->customer_name = $request->CustomerName;
                $sell->phone = $request->Phone;
                $sell->address = $request->Address;
                $sell->order_no = $request->order_no;
                $sell->sells_date = $request->SellsDate;
                $sell->right_sph = $request->RightSPH;
                $sell->right_cyl = $request->RightCYL;
                $sell->right_axis = $request->RightAxis;
                $sell->right_add = $request->RightADD;
                $sell->left_sph = $request->LeftSPH;
                $sell->left_cyl = $request->LeftCYL;
                $sell->left_axis = $request->LeftAxis;
                $sell->left_add = $request->LeftADD;
                $sell->ipd = $request->IPD;
                $sell->delivery_date = $request->DeliveryDate;
                $sell->quantity = $request->Quantity;
                $sell->total = $request->Total;
                $sell->advance = $request->Advance;
                $sell->due = $request->Due;
                $sell->status = $status;
                $sell->note_about_lens = $request->NoteAL;
                $sell->note_about_customer = $request->NoteAC;
                $sell->save();
                return response()->json($sell);            
            } else {
                return response()->json(['errorsR' => 'Quantity is out of stock']);
            }
        }
    }
}
