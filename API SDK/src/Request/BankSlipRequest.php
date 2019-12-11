<?php
require_once 'Request.php';

class BankSlipRequest extends Request
{

    private $jwt;
    private $url = "https://dev-api.portalsoulpay.com.br/api/v1/bankSlip";
    private $authorization;

    public function __construct($jwt)
    {
        parent::__construct($url);
        $this->jwt = $jwt;
        $this->authorization = "Authorization: Bearer " . $jwt;
    }

    public function send($data)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $this->authorization));
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($curl);
        echo ('<pre>' . $result . '</pre>');
        return json_decode($result);
    }
}
