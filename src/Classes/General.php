<?php

namespace g4t\Sas3\Classes;

use Illuminate\Support\Facades\Http;

trait General {

    /**
     * get company information.
     * @return array
     */
    public function company()
    {
        return $this->get($this->company);
    }


    /**
     * send post request to sas3.
     * @param $url
     * @param array $params
     * @return mixed
     */
    public function post($url, array $params = [])
    {
        $response = Http::withHeaders([
            'Cookie' => $this->cookie,
            'X-Csrf-Token' => $this->csrf
        ])->post($this->url . $url, $params);
        return $response->json();
    }


    /**
     * get function.
     *
     * @param $url
     * @param array $params
     * @return mixed
     */
    public function get($url, array $params = [])
    {
        $response = Http::withHeaders([
            'Cookie' => $this->cookie,
            'X-Csrf-Token' => $this->csrf
        ])->get($this->url . $url, $params);
        return $response->json();
    }



}
