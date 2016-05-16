<?php

namespace App\Action;

use App\Service\AuthorService;
use Interop\Container\ContainerInterface;

class AuthorActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $authorService = $container->get(AuthorService::class);

        return new AuthorAction($authorService);
    }
}
