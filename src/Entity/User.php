<?php

namespace App\Entity;

use App\Entity\Person;
use App\Traits\PersonalInfos;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends Person
{
    /**
     * @ORM\Column(type="string")
     */
    private string $username;
    /**
     * @ORM\Column(type="string")
     */
    private string $pwd;
    use PersonalInfos {
        PersonalInfos::__construct as traitConstruct;
    }
    public function __construct($e, $f, $l, $u, $p)
    {
        parent::__construct($e);
        $this->traitConstruct($f, $l);
        $this->username = $u;
        $this->pwd = $p;
    }

    /**
     * Get the value of username
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of pwd
     *
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @param string $pwd
     *
     * @return self
     */
    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }
}
