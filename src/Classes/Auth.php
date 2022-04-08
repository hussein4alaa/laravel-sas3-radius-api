<?php

namespace g4t\Sas3\Classes;

use Illuminate\Support\Facades\Http;

trait Auth
{

    /**
     * login to sas3 function.
     * @return void
     */
    public function login(): void
    {
        $response = Http::post($this->url . $this->login, [
            'language' => 'en',
            'username' => $this->username,
            'rememberme' => true,
            'password' => $this->password,
        ]);
        $cookie = $response->header('Set-Cookie');
        $this->getCSRF($cookie);
    }



    /**
     * get csrf token.
     * @param string $cookie
     * @return void
     */
    public function getCSRF(string $cookie): void
    {
        $response2 = Http::withHeaders([
            'Cookie' => $cookie
        ])->get($this->url . $this->web_dashboard);
        $source = htmlentities($response2->body());
        $source = strstr($source, 'csrf_token');
        $source = str_replace("csrf_token' type='hidden' value='", "", $source);
        $source = substr($source, 0, strpos($source, "loading_main_screen"));
        $csrf_token = substr($source, 0, strpos($source, "'"));
        $this->csrf = $csrf_token;
        $this->cookie = $cookie;
    }


}
