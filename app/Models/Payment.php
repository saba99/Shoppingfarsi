<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*class Payment extends Model
{//
    
}*/ 
use SoapClient;
use App\Models\Order;

class Payment extends Model{ 
     
    private $MerchantID;
    private $Amount;
    private  $Description;
    //private  $Email;
    //private $Mobile;
    private $CallbackURL;

public function __construct($amount, $orderId = null){


        $this->MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required
        $this->Amount = $amount; //Amount will be based on Toman - Required
        //$this->Description = $description;
        $this->Description = 'پرداخت وجه بابت  دریافت کالا';
        //$Email = 'UserEmail@Mail.Com'; // Optional
        //$this->Mobile = '09123456789'; // Optional
        $this->CallbackURL = 'http://127.0.0.1:8000/payment-verify'.$orderId; // Required
}
public function doPayment(){
        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $this->MerchantID,
                'Amount' => $this->Amount,
                'Description' => $this->Description,
                //'Email' => $Email,
                //'Mobile' => $Mobile,
                'CallbackURL' => $this->CallbackURL,
            ]
        );

        return $result;

}

public function verifyPayment($authority,$status){

        if ($status== 'OK') {

            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->MerchantID,
                    'Authority' => $authority,
                    'Amount' => $this->Amount,
                ]
            );

          return $result;
}
/*else{

    return false;
}*/
    
}

public function order(){


    return $this->hasOne(Order::class);
}
}


