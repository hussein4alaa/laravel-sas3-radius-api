<?php

namespace g4t\Sas3\Classes;

trait Credit
{

    /**
     * Deposit Trial.
     *
     * @param $amount
     * @param $manager_id
     * @return mixed
     */
    public function depostTrial($amount, $manager_id)
    {
        return $this->post($this->add_tests, [
            'amount' => $amount,
            'id' => $manager_id
        ]);
    }


    /**
     * Reduce Trial.
     *
     * @param $amount
     * @param $manager_id
     * @return mixed
     */
    public function reduceTrial($amount, $manager_id)
    {
        return $this->post($this->remove_test, [
            'amount' => $amount,
            'id' => $manager_id
        ]);
    }



    /**
     * Depost Trial.
     *
     * @param $amount
     * @param $manager_id
     * @param string $comment
     * @return mixed
     */
    public function depostCredit($amount, $manager_id, $comment = '')
    {
        return $this->post($this->depost_credit, [
            'amount' => $amount,
            'id' => $manager_id,
            'paid' => $amount,
            'comment' => $comment
        ]);
    }


    /**
     * Reduce Trial.
     *
     * @param $amount
     * @param $manager_id
     * @param string $comment
     * @return mixed
     */
    public function reduceCredit($amount, $manager_id, string $comment = '')
    {
        return $this->post($this->remove_credit, [
            'amount' => $amount,
            'id' => $manager_id,
            'comment' => $comment
        ]);
    }




    /**
     * Active Test.
     *
     * @param $username
     * @return mixed
     */
    public function activeTest($username)
    {
        return $this->post($this->active_test, ['username' => $username]);
    }


    /**
     * Active Credit.
     *
     * @param $username
     * @param int $paid
     * @return mixed
     */
    public function activeCredit($username, int $paid = 0)
    {
        return $this->post($this->active_credit, [
            'username' => $username,
            'paid' => $paid,
        ]);
    }



}
