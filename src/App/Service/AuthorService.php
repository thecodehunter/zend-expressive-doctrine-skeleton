<?php

namespace App\Service;

use Doctrine\ORM\EntityManager;

const REPOSITORY = 'App\Entity\Author';

class AuthorService implements AuthorServiceInterface
{

    protected $entityManager;
    const REPOSITORY = 'App\Entity\Author';
    
    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

    public function findAll()
    {
        $repo = $this->entityManager->getRepository(self::REPOSITORY);

        return $repo->findAll();
        
    }
}