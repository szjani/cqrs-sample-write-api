<?php

namespace hu\szjani\sample\command\user;

class ModifyEmail extends AbstractEmailModificationCommand
{
    private $userId;
    private $version;

    public function __construct($userId, $email, $rawPassword, $version)
    {
        parent::__construct($email, $rawPassword);

        $this->userId = $userId;
        $this->version = (int) $version;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
}
