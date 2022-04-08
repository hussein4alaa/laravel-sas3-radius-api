<?php

namespace g4t\Sas3\Classes;

use g4t\Sas3\Sas3Routes;

trait Links
{

    protected $login = Sas3Routes::LOGIN;

    protected $users_list = Sas3Routes::USERS_LIST;

    protected $single_user = Sas3Routes::SINGLE_USER;

    protected $add_user = Sas3Routes::ADD_USER;

    protected $update_user = Sas3Routes::UPDATE_USER;

    protected $change_profile = Sas3Routes::CHANGE_PROFILE;

    protected $rename_user = Sas3Routes::RENAME_USER;

    protected $delete_users = Sas3Routes::DELETE_USERS;

    protected $online_users = Sas3Routes::ONLINE_USERS;

    protected $disconnect = Sas3Routes::DISCONNECT;

    protected $web_dashboard = Sas3Routes::WEB_DASHBOARD;

    protected $company = Sas3Routes::COMPANY;

    protected $managers_list = Sas3Routes::MANAGERS_LIST;

    protected $single_manager = Sas3Routes::SINGLE_MANAGER;

    protected $add_manager = Sas3Routes::ADD_MANAGER;

    protected $delete_managers = Sas3Routes::DELETE_MANAGERS;

    protected $update_managers = Sas3Routes::UPDATE_MANAGERS;

    protected $add_tests = Sas3Routes::ADD_TESTS;

    protected $remove_test = Sas3Routes::REMOVE_TEST;

    protected $depost_credit = Sas3Routes::DEPOST_CREDIT;

    protected $remove_credit = Sas3Routes::REMOVE_CREDIT;

    protected $active_test = Sas3Routes::ACTIVE_TEST;

    protected $active_credit = Sas3Routes::ACTIVE_CREDIT;

    protected $profiles = Sas3Routes::PROFILES;

}
