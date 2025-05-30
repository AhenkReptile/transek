<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;
use Xendit\Invoice\InvoiceCallback;
use Illuminate\Support\Str;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function __construct() {
        Configuration::setXenditKey("xnd_development_uLgUTEfAVz72jNc46yHaaGjhsvyyoHhLehb1HpJ5uhpcfT88O6vVMRG04P5jxE");
        // $this->var = $var;
    }

    public function create(Request $request) {
        $apiInstance = new InvoiceApi();
        $create_invoice_request = new CreateInvoiceRequest([
                'external_id' => (string) Str::uuid(),
                'payer_email' => $request->payer_email,
                'description' => $request->description,
                'amount' => $request->amount,
                'redirect' => '#',
                'invoice_duration' => 172800,
                'currency' => 'IDR',
                'reminder_time' => 1
        ]);

        try {
            // save
            $result =  $apiInstance->createInvoice($create_invoice_request)['invoice_url'];
            $payment = new Payment;
            $payment->status = 'pending';
            $payment->checkout_link = $result;
            $payment->external_id = $create_invoice_request['external_id'];
            $payment->save();

            return redirect($result);
            return response()->json(['link = ' => $result, 'data = ' => $create_invoice_request]);
        } catch (\Xendit\XenditSdkException $e) {
            echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
            echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
        }
    }
    
    public function webhook(Request $request) {
        $payment = Payment::orderBy('created_at')->first();
            // return response()->json(['external_id' => $payment->external_id]);

        if ($payment->status == 'paid'){
             return response()->json(['data'=> 'Payment Already Successful']);
        }

        $payment->status = 'paid';
        $payment->save();
        return response()->json(['data = ' => 'Successful']);
    }
}
