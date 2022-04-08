# laravel sas3 radius api
####Integration with sas3 using laravel

## Installation:
Require this package with composer using the following command:

```sh
composer require g4t/laravel-sas3-radius
```


## Usage
##### You have examples in repository in folder `examples`

######Users List
```shell
Sas3::connect($url, $username, $password)
    ->users()
    ->search()          # search
    ->showsub()         # not required
    ->paginate('page_number');
```

######Add User
```shell
Sas3::connect($url, $username, $password)
            ->addUser([
                "enableuser" => 1,
                "country" => "Iraq",
                "city" => "Address,City",
                "simuse" => 1,
                "username" => "aa@aas222",
                "srvid" => "41",
                "firstname" => "aa@aa",
                "owner" => "0",
                "password" => "aa@aa"
            ]);
```


######Update User
```sh
Sas3::connect($url, $username, $password)
            ->updateUser([
                "username" => "aa@aa",                  # username
                "address" => "11",                      # address
                "city" => "baghdad",                    # city
                "comment" => "comment",                 #comment
                "warning_notified" => "0",
                "country" => "Iraq",                    # country
                "contractid" => "",
                "createdon" => "2021-09-18",
                "downlimit" => 0,
                "comblimit" => "0",
                "email" => "",                          # email address
                "ipv6prefix" => "",
                "enableuser" => "1",                    # enable OR desabler
                "expiration" => "2023-04-07 09:00:00",  # expire date
                "nationalid" => null,           # natonal id
                "firstname" => "Hussein Alaa",    # first name
                "lastname" => "",
                "mac" => "",            # mac address
                "usemacauth" => "0",
                "mobile" => "",         # mobile number
                "image" => null,        # image
                "owner" => "1",         # owner id
                "srvid" => "41",        # profile id
                "staticipcpe" => "",
                "mt_filter_id" => "",
                "uplimit" => 0,
                "uptimelimit" => "00:00:00",
                "addresslist" => null,
                "framedroute" => "",
                "mikrotik_group" => "",
                "createdby2" => "admin@56",
                "owner2" => "admin@56",
                "profile" => "Light",
                "lastlogin" => null,
                "lastip" => null,
                "tpassword" => "22221",
                "simuse" => "1",
                "status" => [
                    "status" => "expired",
                    "dl" => "0",
                    "ul" => "0",
                    "comb" => "0",
                    "ut" => "0",
                    "exp" => "1",
                    "online" => "0",
                    "quota_remaining_total" => 0,
                    "quota_remaining_download" => 0,
                    "quota_remaining_upload" => 0
                ],
                "totaltraffic" => 0,
                "totalDownload" => null,
                "totalUpload" => null,
                "daily_downlimit" => 0,
                "daily_uplimit" => 0,
                "daily_total_limit" => 0,
                "macs" => []
            ]);
```

######Delete User
```sh
Sas3::connect($url, $username, $password)->deleteUsers(['user@test']);
```

######Rename User
```sh
Sas3::connect($url, $username, $password)->renameUser('old_name@user', 'new_name@user');
```

######Change User Profile
```sh
Sas3::connect($url, $username, $password)->changeProfile('name@user', new_profile_id);
```


######Active user by credit
```shell
Sas3::connect($url, $username, $password)->activeCredit('user@name');
```

######Active user by Test
```shell
Sas3::connect($url, $username, $password)->activeTest('user@name');
```

######Show single user by username
```shell
Sas3::connect($url, $username, $password)->user('user@name');
```


######Export Users as `CSV`
```sh
use g4t\sas3\sas3;
.
.
$url = 'http://192.168.200.3';
$username = 'admin';
$password = 'admin';
Sas3::connect($url, $username, $password)
    ->users()
    ->export();
```


######Online Users List
```sh
Sas3::connect($url, $username, $password)
            ->online()
            ->search()        # search (string)
            ->showsub()       # not required
            ->paginate(1);    # page Number
```


######Get Profiles List
```sh
Sas3::connect($url, $username, $password)->profiles();
```


######Managers List
```shell
Sas3::connect($url, $username, $password)
    ->managers()
    ->search()   # search
    ->showsub()         # not required
    ->paginate('page_number');
```

######Show manager by id
```shell
Sas3::connect($url, $username, $password)->manager('manager_id');
```

######Create Manager
```shell
Sas3::connect($url, $username, $password)
            ->addManager([
                "username" => "admin@user",
                "password1" => "1111",
                "password2" => "1111",
                "name" => "HusseinAlaa",
                "enabled" => 1,
                "parent" => "0",
                "debt_limit" => "0.00",
                "country" => "Iraq",
                "city" => "baghdad",
                "email" => "hussein4alaa@gmail.com",
                "company" => "HusseinAlaa",
                "phone" => "07700000000",
                "address" => "baghdad",
                "acl_group" => "1",
                "password" => "1111"
            ]);
```

######Update Manager
```shell
Sas3::connect($url, $username, $password)
            ->updateManager([
                "id" => "1",
                "username" => "admin@56",
                "freeuser" => null,
                "name" => "name",
                "enabled" => "1",
                "credit" => "83.000",
                "test_units" => "2.00",
                "debt_limit" => "0.00",
                "company" => "",
                "email" => "hussein4alaa@gmail.com",
                "phone" => "0770000000",
                "country" => "Iraq",
                "city" => "baghdad",
                "image" => null,
                "address" => "baghdad",
                "notes" => "",
                "hs_redirect_url" => "",
                "hs_adv_url" => "",
                "testsunits_monthly" => "0.00",
                "addresslist" => "",
                "suffix" => "",
                "createdon" => "2022-04-08",
                "parent_id" => "0",
                "parent_name" => "admin",
                "acl_group" => "1",
                "last_login" => "2022-04-08 15:52:43",
                "profiles" => [],
                "parent" => "0"
            ]);
```


######Delete Managers
```shell
Sas3::connect($url, $username, $password)->deleteManagers(['manager_id', 'another manager_id']);
```



######Withdrawing the Credit from the manager
```shell
Sas3::connect($url, $username, $password)->reduceCredit('test_amount', 'manager_id');
```

######Add Credit to manager
```shell
Sas3::connect($url, $username, $password)->depostCredit('test_amount', 'manager_id', 'comment');
```


######Withdrawing the tests from the manager
```shell
Sas3::connect($url, $username, $password)->reduceTrial('test_amount', 'manager_id');
```


######Add test to manager
```shell
Sas3::connect($url, $username, $password)->depostTrial('test_amount', 'manager_id');
```





### License

Laravel Design Pattern Generator is free software licensed under the MIT license.

