<?php

namespace App\Entity;

use App\Entity\Person;
use App\Traits\PersonalInfos;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="author")
 */
class Author extends Person
{
    use PersonalInfos {
        PersonalInfos::__construct as traitConstruct;
    }
    public function __construct($e,$f, $l)
    {
        parent::__construct($e);
        $this->traitConstruct($f, $l);
    }
}
