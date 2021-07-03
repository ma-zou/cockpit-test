<?php

class RequestHandler {
    protected $api_token;

    public function __construct($api_token) {
        $this->api_token = $api_token;
        $this->api_url = 'http://localhost:8080/api';
        $this->api_page_access = '/pages';
    }
    public function get_page_data(string $page) {
        $url_string = $this->api_url.'/collections/get'.$this->api_page_access.'?token='.$this->api_token;

        $curl = curl_init($url_string);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        $data = curl_exec($curl);

        return $data;
    }
}