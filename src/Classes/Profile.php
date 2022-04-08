<?php

namespace g4t\Sas3\Classes;

trait Profile
{
    /**
     * Profiles List.
     *
     * @return mixed
     */
    public function profiles()
    {
        return $this->get($this->profiles);
    }


}
