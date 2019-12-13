<?php

require_once 'Request.php';

abstract class TransactionRequest extends Request
{

    private $jwt;
    private $authorization;
    private $url;

    public function __construct($url, $jwt)
    {
        $this->url = $url;
        $this->jwt = $jwt;
        $this->authorization = "Authorization: Bearer " . $jwt;
        parent::__construct($this->url);
    }

    public function get($id)
    {
        try {
            $curl = curl_init();
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, array($this->authorization));
            curl_setopt($curl, CURLOPT_URL, $this->url.'/'.$id);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($curl);
            return $result;
        } catch (Exception $e) {

        }
    }

    public function send($data)
    {
        try {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $this->authorization));
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
