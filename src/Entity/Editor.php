<?php 

namespace App\Entity;
use App\Entity\Person;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="editor")
 */
class Editor extends Person {
    /**
     * @ORM\Column(type="string")
     */
    private string $companyName;

    public function __construct(string $e, string $c){
        parent::__construct($e);
        $this->companyName = $c;
    }

    /**
     * Get the value of companyName
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * Set the value of companyName
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }
}
