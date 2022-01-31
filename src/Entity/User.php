<?php 

namespace App\Entity;

use App\Entity\Person;
use App\Traits\PersonalInfos;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends Person {
    /**
     * @ORM\Column(type="string")
     */
    private string $username;
    use PersonalInfos{
     PersonalInfos::__construct as traitConstruct;
    }
    public function __construct($e, $f, $l, $u) {
        parent::__construct($e);
        $this->traitConstruct($f, $l);
        $this->username = $u;
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
}
