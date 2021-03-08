<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        dd('test');
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */
    public function test(Request $request, int $age)
    {
        // $age = $request->attributes->get('age');
        dd($age);
    }
}