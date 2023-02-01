<?php

class loginModel
{
    private $user;
    private $password;
    private $perfil;

    function __construct()
    {
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    function validate()
    {
        return (
            ($this->user == 'admin' && $this->password == '123') ||
            ($this->user == 'user' && $this->password == '987')
        );
    }
}
