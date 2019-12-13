<?php

require_once 'TokenRefreshRequest.php';

class Token extends TokenRefreshRequest
{

    private $jwt;
    private $url = "https://dev-api.portalsoulpay.com.br/api/v1/auth/refresh-token";

    public function __construct($jwt)
    {
        parent::__construct($this->url, $jwt);
    }

    public function send($data)
    {
        return json_encode(parent::send($data));
    }

}
