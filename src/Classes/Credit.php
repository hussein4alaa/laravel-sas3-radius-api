<?php

namespace g4t\Sas3\Classes;

trait Credit
{

    public function depostTrial($amount, $manager_id)
    {
        return $this->post($this->add_tests, [
            'amount' => $amount,
            'id' => $manager_id
        ]);
    }


    public function reduceTrial($amount, $manager_id)
    {
        return $this->post($this->remove_test, [
            'amount' => $amount,
            'id' => $manager_id
        ]);
    }




    public function depostCredit($amount, $manager_id, $comment = '')
    {
        return $this->post($this->depost_credit, [
            'amount' => $amount,
            'id' => $manager_id,
            'paid' => $amount,
            'comment' => $comment
        ]);
    }



    public function reduceCredit($amount, $manager_id, $comment = '')
    {
        return $this->post($this->remove_credit, [
            'amount' => $amount,
            'id' => $manager_id,
            'comment' => $comment
        ]);
    }






    public function activeTest($username)
    {
        return $this->post($this->active_test, ['username' => $username]);
    }


    public function activeCredit($username, $paid = 0)
    {
        return $this->post($this->active_credit, [
            'username' => $username,
            'paid' => $paid,
        ]);
    }



}
