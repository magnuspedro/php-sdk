<?php

abstract class Request
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function send()
    {}

    public function get()
    {}

}
