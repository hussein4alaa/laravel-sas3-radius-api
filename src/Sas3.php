<?php

namespace g4t\Sas3;

use g4t\Sas3\Classes\Auth;
use g4t\Sas3\Classes\Credit;
use g4t\Sas3\Classes\Links;
use g4t\Sas3\Classes\Manager;
use g4t\Sas3\Classes\Profile;
use g4t\Sas3\Classes\User;
use g4t\Sas3\Classes\Export;
use g4t\Sas3\Classes\General;


class Sas3
{

    use User, Manager, Credit, Profile, Links, Auth, Export, General;

    /*
    |--------------------------------------------------------------------------
    | SAS3
    |--------------------------------------------------------------------------
    |
    | This class handles authenticating users for the sas3 and
    | get users list & export it as csv file to import it in another reseller
    |
    */


    /**
     * sas3 base url.
     */
    public $url;

    /**
     * sas3 authentication username.
     */
    public $username;

    /**
     * sas3 authentication passwod.
     */
    public $password;

    /**
     * sas3 csrf token (from website).
     */
    public $csrf;

    /**
     * sas3 cookies key (from website).
     */
    public $cookie;

    /**
     * paginate status.
     */
    public $paginate = false;

    /**
     * current page.
     */
    public $page = 1;

    /**
     * function will run.
     */
    public $function = '';

    /**
     * function run status.
     */
    public $run = false;

    /**
     * search text.
     */
    public $search = '';

    public $showsub = 0;

    public function __construct($url, $username, $password)
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
        $this->login();
    }


    /**
     * static function to pass data to construct.
     * @var url
     * @var username
     * @var password
     */
    public static function connect($url, $username, $password)
    {
        return new static($url, $username, $password);
    }


    public function search($search = '')
    {
        $this->search = $search;
        return $this;
    }


    public function showsub()
    {
        $this->showsub = 1;
        return $this;
    }

    /**
     * Divide the response into pages.
     * @param int $page
     * @return array
     */
    public function paginate(int $page = 1)
    {
        if ($page) {
            $this->paginate = true;
            $this->page = $page;
        } else {
            $this->paginate = false;
        }
        $this->run = true;
        return $this->{$this->function}();
    }




}
