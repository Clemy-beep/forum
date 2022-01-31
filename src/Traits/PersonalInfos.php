<?php 

namespace App\Traits;
use Doctrine\ORM\Mapping as ORM;


/**
 * 
 */
trait PersonalInfos
{
     /**
     * @ORM\Column(type="string", name="firstname")
     */
    private string $firstname;
     /**
     * @ORM\Column(type="string", name="lastname")
     */
    private string $lastname;

    public function __construct(string $f, string $l){
        $this->firstname = $f;
        $this->lastname = $l;
    }


    /**
     * Get the value of firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }
}


?>