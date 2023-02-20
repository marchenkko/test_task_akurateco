<?php

namespace Api;

class Request implements RequestInterface
{
    public $url_api;

    public function __construct($url_api)
    {
        $this->url_api = $url_api;
    }

    /**
     * @param $params
     * @return bool|string
     */
    public function sendRequestSale($params)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url_api);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            return 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;
    }
}
