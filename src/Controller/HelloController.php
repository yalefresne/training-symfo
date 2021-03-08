<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    // protected $logger;

    // public function __construct(LoggerInterface $logger)
    // {
    //     $this->logger = $logger;    
    // }
    /**
     * @Route("/hello/{name<\w+>}", name="hello", )
     */
    public function Hello($name = "wolrd", LoggerInterface $logger)
    {
        $logger->info("Mon msg $name");
        return new Response("Hello $name");
    }
}