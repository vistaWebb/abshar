<?php

namespace App\paymentGateway;

class Pay extends payment
{
    public function send($amounts, $addressId)
    {
        $api = 'test';
        $amount = $amounts['paying_amount'] . '0';
        $redirect = route('home.payment_verify' , ['gatewayName' => 'pay']);
        $result = $this->sendRequest($api, $amount, $redirect);
        $result = json_decode($result);
        if ($result->status) {
            $createOrder = parent::createOrder($addressId, $amounts, $result->token, 'pay');
            if (array_key_exists('error', $createOrder)) {
                return $createOrder;
            }

            $go = "https://pay.ir/pg/$result->token";
            return ['success' => $go];
        } else {
            return ['error' => $result->errorMessage];
        }
    }

    public function verify($token , $status)
    {
        $api = 'test';
        $token = $token;
        $result = json_decode($this->verifyRequest($api, $token));
        if (isset($result->status)) {
            if ($result->status == 1) {
                $updateOrder = parent::updateOrder($token, $result->transId);
                if (array_key_exists('error', $updateOrder)) {
                    return $updateOrder['error'];
                }
                \Cart::clear();
                return ['success' => 'پرداخت با موفقیت انجام شد. شماره تراکنش:' . $result->transId ];
            } else {
                return ['error' => 'پرداخت با خطا مواجه شد. شماره تراکنش:' . $result->status ];
            }
        } else {
            if ($status == 0) {
                return ['error' => 'پرداخت با خطا مواجه شد. شماره تراکنش:' . $status ];
            }
        }
    }

    public function encrypt_pkcs7($str, $key)
    {
        $key = base64_decode($key);
        $cipher = 'des-ede3-ecb';
        $block_size = 8;
        $pad = $block_size - (strlen($str) % $block_size);
        $str .= str_repeat(chr($pad), $pad);
        $ciphertext = openssl_encrypt($str, $cipher, $key, OPENSSL_RAW_DATA);
        return base64_encode($ciphertext);
    }

    public function CallAPI($url, $data = false)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Content-Length: ' . strlen($data)]);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
}
