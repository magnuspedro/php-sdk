<?php

require_once 'TransactionRequest.php';

class RecurringRequest extends TransactionRequest
{

    public function __construct($jwt, $isProduction = true)
    {
        parent::__construct("recurrence", $jwt, $isProduction);
    }

    public function send($data)
    {
        return json_encode(parent::send($data));
    }
}
