<?php

require_once 'TransactionRequest.php';

class RecurringRequest extends TransactionRequest
{
    private $jwt;
    private $url = "https://dev-api.portalsoulpay.com.br/api/v1/recurrence";

    public function __construct($jwt)
    {
        parent::__construct($this->url, $jwt);
    }

    public function send($data)
    {
        return json_encode(parent::send($data));
    }
}
