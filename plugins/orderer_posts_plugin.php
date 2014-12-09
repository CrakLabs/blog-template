<?php

class Orderer_Posts_Plugin
{
    public function request_url(&$url)
    {
        var_dump($url);
        exit;
    }
}