<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sms;
use App\Sell;
use DB;
use Validator;
use Response;

class SmsController extends Controller
{
    protected $postUrl;
    protected $Username;
    protected $Password;
    
    public function __construct()
    {
         // Company's name POST URL
        // $postUrl = "http://api.bulksms.icombd.com/api/v3/sendsms/xml";

        $this->postUrl = "http://api.bulksms.icombd.com/api/v3/sendsms/xml";
        $this->Username ="i-soft";
        $this->Password ="QuPVx2IH";
    }
    public function index()
    {
        $allsms = Sms::all();
        return view('admin.sms.sms',compact('allsms'));
    }
    public function updateMessage(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'message' => 'required'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $id = $request->id;
            $sms = Sms::find($id);
            $sms->message = $request->message;
            $sms->save();
            return response()->json($sms);            
        }

    }
    public function send(Request $request)
    {
        $this->validate($request,[
            'phone' => 'required|max:11|min:11',
            'message' => 'required'
         ]);

        // XML-formatted data
        $xmlString =
        "<SMS>
        <authentification>
        <username>$this->Username</username>
        <password>$this->Password</password>
        </authentification>
        <message>
        <sender>Optiical Care bd</sender>
        <text>$request->message</text>
        </message>
        <recipients>
        <gsm>88$request->phone</gsm>
        </recipients>
        </SMS>";
        // previously formatted XML data becomes value of "XML" POST variable
        $fields = "XML=" . urlencode($xmlString);
        // in this example, POST request was made using PHP's CURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->postUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        // response of the POST request
        $response = curl_exec($ch);
        curl_close($ch);
        // write out the response
        $sendto = $request->phone;
        return view('admin.sms.confirmsms',compact('sendto'));

    }
    public function allSMS()
    {
        $sms = Sms::where('message_type','Event or Occasion')->first();
        // XML-formatted data
        $customers = Sell::all();
        
        foreach ($customers as $customer) {
            $xmlString =
            "<SMS>
            <authentification>
            <username>$this->Username</username>
            <password>$this->Password</password>
            </authentification>
            <message>
            <sender>Optiical Care bd</sender>
            <text>Dear,$customer->customer_name $sms->message</text>
            </message>
            <recipients>
            <gsm>88$customer->phone</gsm>
            </recipients>
            </SMS>";
            // previously formatted XML data becomes value of "XML" POST variable
            $fields = "XML=" . urlencode($xmlString);
            // in this example, POST request was made using PHP's CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->postUrl);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            // response of the POST request
            $response = curl_exec($ch);
            curl_close($ch);
            // write out the response
        }
        $sendto = "All Customers";
        return view('admin.sms.confirmsms',compact('sendto'));  
    }
    public function dueSms($id)
    {
        $customers = Sell::findOrFail($id);
        $sms = Sms::where('message_type','Due Payment Reminder')->first();
        // XML-formatted data
        $xmlString =
        "<SMS>
        <authentification>
        <username>$this->Username</username>
        <password>$this->Password</password>
        </authentification>
        <message>
        <sender>Optiical Care bd</sender>
        <text>Dear,$customers->customer_name $sms->message</text>
        </message>
        <recipients>
        <gsm>88$customers->phone</gsm>
        </recipients>
        </SMS>";
        // previously formatted XML data becomes value of "XML" POST variable
        $fields = "XML=" . urlencode($xmlString);
        // in this example, POST request was made using PHP's CURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->postUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        // response of the POST request
        $response = curl_exec($ch);
        curl_close($ch);
        // write out the response
        $sendto = $customers->customer_name;
        return view('admin.sms.confirmsms',compact('sendto'));
    }
    public function dueAllSms()
    {
        $sms = Sms::where('message_type','Due Payment Reminder')->first();
        // XML-formatted data
        $customers = Sell::where('status','Due')->get();
        
        foreach ($customers as $customer) {
            $xmlString =
            "<SMS>
            <authentification>
            <username>$this->Username</username>
            <password>$this->Password</password>
            </authentification>
            <message>
            <sender>Optiical Care bd</sender>
            <text>Dear,$customer->customer_name $sms->message</text>
            </message>
            <recipients>
            <gsm>88$customer->phone</gsm>
            </recipients>
            </SMS>";
            // previously formatted XML data becomes value of "XML" POST variable
            $fields = "XML=" . urlencode($xmlString);
            // in this example, POST request was made using PHP's CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->postUrl);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            // response of the POST request
            $response = curl_exec($ch);
            curl_close($ch);
            // write out the response
        }

        $sendto = "All Due Customers";
        return view('admin.sms.confirmsms',compact('sendto'));

        
    }
    public function deliverySms($id)
    {
        $customers = Sell::findOrFail($id);
        $sms = Sms::where('message_type','Today Delivery')->first();
        // XML-formatted data
        $xmlString =
        "<SMS>
        <authentification>
        <username>$this->Username</username>
        <password>$this->Password</password>
        </authentification>
        <message>
        <sender>Optiical Care bd</sender>
        <text>Dear,$customers->customer_name $sms->message</text>
        </message>
        <recipients>
        <gsm>88$customers->phone</gsm>
        </recipients>
        </SMS>";
        // previously formatted XML data becomes value of "XML" POST variable
        $fields = "XML=" . urlencode($xmlString);
        // in this example, POST request was made using PHP's CURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->postUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        // response of the POST request
        $response = curl_exec($ch);
        curl_close($ch);
        // write out the response
        $sendto = $customers->customer_name;
        return view('admin.sms.confirmsms',compact('sendto'));
    }
    public function deliveryAllSms()
    {
        $sms = Sms::where('message_type','Today Delivery')->first();
        // XML-formatted data
        $customers = Sell::where('delivery_date',DB::raw('curdate()'))->get();
        
        foreach ($customers as $customer) {
            $xmlString =
            "<SMS>
            <authentification>
            <username>$this->Username</username>
            <password>$this->Password</password>
            </authentification>
            <message>
            <sender>Optiical Care bd</sender>
            <text>Dear,$customer->customer_name $sms->message</text>
            </message>
            <recipients>
            <gsm>88$customer->phone</gsm>
            </recipients>
            </SMS>";
            // previously formatted XML data becomes value of "XML" POST variable
            $fields = "XML=" . urlencode($xmlString);
            // in this example, POST request was made using PHP's CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->postUrl);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            // response of the POST request
            $response = curl_exec($ch);
            curl_close($ch);
            // write out the response
        }
        $sendto = "All Today Delivery Customers";
        return view('admin.sms.confirmsms',compact('sendto'));    
    }
}
