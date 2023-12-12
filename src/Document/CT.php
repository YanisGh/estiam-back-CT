<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document(repositoryClass: CTRepository::class)]
class CT
{
    #[MongoDB\Id]
    protected $_id;

    #[MongoDB\EmbedOne(targetDocument: Fields::class)]
    private $fields;
    
    public function getId(): string {
        return $this->_id;
    }

    public function getFields() {
        return $this->fields;
    }
}
