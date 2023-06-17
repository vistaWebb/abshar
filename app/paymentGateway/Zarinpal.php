<?php

namespace App\PaymentGateway;

class Zarinpal extends Payment
{
    public function send($f_name , $l_name ,$email , $phone , $category_id , $donation_id , $amount , $payment_method)
    {
        $data = [
            'MerchantID' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
            'Amount' => $amount,
            'CallbackURL' => route('home.payment_verify', ['gatewayName' => 'zarinpal']),
        ];

        $jsonData = json_encode($data);
        $ch = curl_init('https://sandbox.zarinpal.com/pg/rest/WebGate/PaymentRequest.json');
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Content-Length: ' . strlen($jsonData)]);

        $result = curl_exec($ch);
        $err = curl_error($ch);
        $result = json_decode($result, true);
        curl_close($ch);
        if ($err) {
            return ['error' => 'cURL Error #:' . $err];
        } else {
            if ($result["Status"] == 100) {

                $createOrder = parent::createOrder($f_name , $l_name ,$email , $phone , $category_id , $donation_id , $amount, $result["Authority"], 'zarinpal');
                if (array_key_exists('error', $createOrder)) {
                    return $createOrder;
                }

                return ['success' => 'https://sandbox.zarinpal.com/pg/StartPay/' . $result["Authority"]];
            } else {
                return ['error' => 'ERR: ' . $result["Status"]];
            }
        }
    }

    public function verify($authority, $amount)
    {
        $MerchantID = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';

        $data = ['MerchantID' => $MerchantID, 'Authority' => $authority, 'Amount' => $amount];
        $jsonData = json_encode($data);
        $ch = curl_init('https://sandbox.zarinpal.com/pg/rest/WebGate/PaymentVerification.json');
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Content-Length: ' . strlen($jsonData)]);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        if ($err) {
            return ['error' => 'cURL Error #:' . $err];
        } else {
            if ($result['Status'] == 100) {
                $updateOrder = parent::updateOrder($authority, $result['RefID']);
                if (array_key_exists('error', $updateOrder)) {
                    return $updateOrder;
                }
                return ['success' => 'Transation success. RefID:' . $result['RefID']];
            } else {
                return ['error' => 'Transation failed. Status:' . $result['Status']];
            }
        }
    }
}
