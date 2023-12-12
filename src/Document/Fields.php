<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\EmbeddedDocument]
class Fields {
    #[MongoDB\Field(type: 'collection')]
    private array $coordgeo =[];

    #[MongoDB\Field(type:'string')]
    private $cct_code_commune;

    public function getCct_code_commune(): array {
        return $this->$cct_code_commune;
    }
}