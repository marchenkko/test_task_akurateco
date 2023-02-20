<?php

namespace Api;

interface RequestInterface
{
    /**
     * @param $params
     * @return mixed
     */
    public function sendRequestSale($params);
}
