<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Repository\DocumentRepository;
/**
* Description of CTRepository
*/
class CTRepository extends DocumentRepository {
    public function getCTByFields($filtre, $value)
    {
        return $this->createQueryBuilder()
              ->find()
              ->field('fields.'.$filtre)->equals($value)
              ->getQuery()
              ->execute();
    }
}