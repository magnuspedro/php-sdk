<?php

require_once 'Request.php';

class LoginRequest extends Request
{

    

    public function __construct()
    {
        $this->url = 'https://dev-api.portalsoulpay.com.br/api/v1/auth/login';
        parent::__construct($this->url);
    }

    public function send($data)
    {
        try {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($curl, CURLOPT_URL, $this->url);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            $result = curl_exec($curl);
            return $result;
        } catch (Exception $e) {
        }
    }

}
