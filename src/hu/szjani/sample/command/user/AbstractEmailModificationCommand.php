<?php

namespace hu\szjani\sample\command\user;

use predaddy\messagehandling\command\CommandBase;

abstract class AbstractEmailModificationCommand extends CommandBase
{
    private $email;
    private $rawPassword;

    public function __construct($email, $rawPassword)
    {
        parent::__construct();
        $this->email = $email;
        $this->rawPassword = $rawPassword;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getRawPassword()
    {
        return $this->rawPassword;
    }
}
