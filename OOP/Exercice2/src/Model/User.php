<?php
namespace Model;

class User
{
    private $id;
    protected $roles = [];
    protected $password;
    protected $salt;
    protected $username;
    
    public function getId()
    {
        return $this->id;
    }

    public function getRoles()
    {
        //return array(Role::ROLE_USER);


        $labels = [Role::ROLE_USER];
        foreach ($this->roles as $role) {
            array_push($labels, $role->getLabel());
        }
        return array_unique($labels);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setRoles(array $roles)
    {
        $this->roles = [];
        foreach ($roles as $role) {
            $this->addRole($role);
        }
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function eraseCredentials()
    {
        $this->password = null;
        $this->salt = null;
    }

    public function addRole(Role $role)
    {
        if(!in_array($role, $this->roles)) {
            array_push($this->roles, $role);
        }
        return $this;
    }

}

