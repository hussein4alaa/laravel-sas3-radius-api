<?php

namespace g4t\Sas3\Classes;

trait User
{

    /**
     * Users List.
     *
     * @return mixed
     */
    public function users()
    {
        $count = $this->paginate == true ? 10 : 100000000;
        $users = $this->post($this->users_list, [
            "count" => $count,
            "page" => $this->page,
            "search" => $this->search,
            "showsub" => $this->showsub
        ]);
        if ($this->paginate == true) {
            $users['page'] = $this->page;
            $last_page = $users['total'] / 10;
            $users['last_page'] = is_float($last_page) ? (int)$last_page + 1 : $last_page;
        }
        $this->function = 'users';
        if ($this->run) {
            return $users;
        }
        return $this;
    }


    /**
     * Delete Users.
     *
     * @param $users
     * @return mixed
     */
    public function deleteUsers($users)
    {
        $ids = [
            'ids' => $users
        ];
        return $this->post($this->delete_users, $ids);
    }


    /**
     * Add User.
     *
     * @param $data
     * @return mixed
     */
    public function addUser($data)
    {
        return $this->post($this->add_user, $data);
    }

    /**
     * Update User.
     *
     * @param $data
     * @return mixed
     */
    public function updateUser($data)
    {
        return $this->post($this->update_user, $data);
    }


    /**
     * Change Profile.
     *
     * @param $username
     * @param $newsrvid
     * @return mixed
     */
    public function changeProfile($username, $newsrvid)
    {
        return $this->post($this->change_profile, [
            "username" => $username,
            "newsrvid" => $newsrvid
        ]);
    }


    /**
     * Rename User.
     *
     * @param $username
     * @param $newusername
     * @return mixed
     */
    public function renameUser($username, $newusername)
    {
        return $this->post($this->rename_user, [
            'username' => $username,
            'newusername' => $newusername
        ]);
    }


    /**
     * Online Users.
     *
     * @return mixed
     */
    public function online()
    {
        $count = $this->paginate == true ? 10 : 100000000;
        $online = $this->post($this->online_users, [
            "count" => $count,
            "page" => $this->page,
            "search" => $this->search,
            "showsub" => $this->showsub,
            "orderby" => "username",
            "srvid" => -1,
        ]);
        if ($this->paginate == true) {
            $online['page'] = $this->page;
            $last_page = $online['total'] / 10;
            $online['last_page'] = is_float($last_page) ? (int)$last_page + 1 : $last_page;
        }
        $this->function = 'online';
        if ($this->run) {
            return $online;
        }
        return $this;
    }


    /**
     * Disconnect User.
     *
     * @param $username
     * @return mixed
     */
    public function disconnect($username)
    {
        return $this->post($this->disconnect, ['username' => $username]);
    }

    public function user($username)
    {
        try {
            return $this->post($this->single_user, ['username' => $username])[0];
        } catch (\Throwable $th) {
            abort(404);
        }
    }

}
