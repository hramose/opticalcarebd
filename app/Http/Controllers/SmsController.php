<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sms;
use App\Sell;

class SmsController extends Controller
{
    public function index()
    {
        $allsms = Sms::all();
        return view('admin.sms.sms',compact('allsms'));
    }
    public function dueSms($id)
    {
        $customers = Sell::findOrFail($id);
        $sms = Sms::where('message_type','Due Payment Reminder')->first();
        
        // Company's name POST URL
        $postUrl = "http://api.bulksms.icombd.com/api/v3/sendsms/xml";
        // XML-formatted data
        $Username ="i-soft";
        $Password ="QuPVx2IH";

        $xmlString =
        "<SMS>
        <authentification>
        <username>$Username</username>
        <password>$Password</password>
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
        curl_setopt($ch, CURLOPT_URL, $postUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        // response of the POST request
        $response = curl_exec($ch);
        curl_close($ch);
        // write out the response
        
        return view('admin.sms.confirmsms');
    }

}
