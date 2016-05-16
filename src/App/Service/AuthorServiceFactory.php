<?php

namespace App\Service;

use Interop\Container\ContainerInterface;
use Doctrine\ORM\EntityManager;


class AuthorServiceFactory
{

    public function __invoke(ContainerInterface $container)
    {
        
        $em = $container->get(EntityManager::class);
        
        return new AuthorService($em);
    }
}