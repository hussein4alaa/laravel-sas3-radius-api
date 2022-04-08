<?php

namespace g4t\Sas3;

class Sas3Routes
{
    public const WEB_DASHBOARD = '/#/dashboard';

    public const LOGIN = '/index.php/login';

    public const USERS_LIST = '/index.php/users/index';

    public const COMPANY = '/index.php/loginconfig';

    public const DELETE_USERS = '/index.php/users/delete';

    public const ADD_TESTS = '/index.php/managers/tests/deposit';

    public const REMOVE_TEST = '/index.php/managers/tests/withdrawal';

    public const MANAGERS_LIST = '/index.php/managers/index';

    public const SINGLE_MANAGER = '/index.php/managers/get';

    public const DEPOST_CREDIT = '/index.php/managers/deposit';

    public const REMOVE_CREDIT = '/index.php/managers/withdrawal';

    public const ADD_MANAGER = '/index.php/managers/store';

    public const DELETE_MANAGERS = '/index.php/managers/delete';

    public const UPDATE_MANAGERS = '/index.php/managers/update';

    public const SINGLE_USER = '/index.php/users/get';

    public const ACTIVE_TEST = '/index.php/users/activate/test';

    public const ACTIVE_CREDIT = '/index.php/users/activate/credit';

    public const ADD_USER = '/index.php/users/store';

    public const UPDATE_USER = '/index.php/users/update';

    public const CHANGE_PROFILE = '/index.php/users/chgsrv';

    public const RENAME_USER = '/index.php/users/rename';

    public const ONLINE_USERS = '/index.php/users/online/index';

    public const DISCONNECT = '/index.php/users/disconnect';

    public const PROFILES = '/index.php/profiles/list';


}
