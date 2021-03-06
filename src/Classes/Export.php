<?php

namespace g4t\Sas3\Classes;

trait Export
{

    /**
     * export all users as @CSV file.
     * @param null $name
     * @return string
     */
    public function export($name = null): string
    {
        $this->run = true;
        $users = $this->{$this->function}();
        return $this->csv($users, $name);
    }


    /**
     * create @CSV file.
     * @param $users
     * @param $name
     * @return string
     */
    public function csv($users, $name): string
    {
        $path = public_path('users');
        if (!file_exists($path)) {
            mkdir($path);
        }
        $file_name = is_null($name) ? 'users/sas3_users_' . rand() . '.csv' : 'users/'.$name.'.csv';
        $columns = array('Username', 'First Name', 'Last Name', 'Expiration', 'Parent', 'Profile', 'Pass');
        $file = fopen($file_name, 'w');
        fputcsv($file, $columns);
        foreach ($users['rows'] as $user) {
            $row['Username'] = $user['username'];
            $row['First Name'] = $user['firstname'];
            $row['Last Name'] = $user['lastname'];
            $row['Expiration'] = $user['expiration'];
            $row['Parent'] = $user['ownerName'];
            $row['Profile'] = $user['profile'];
            $row['Pass'] = $this->post('/index.php/users/get', ['username' => $user['username']])[0]['tpassword'];
            fputcsv($file, array($row['Username'], $row['First Name'], $row['Last Name'], $row['Expiration'], $row['Parent'], $row['Profile'], $row['Pass']));
        }
        fclose($file);
        return $file_name;
    }
}

