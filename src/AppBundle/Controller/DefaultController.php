<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $output = array();

        exec("c:/wamp/www/hello.py", $output);
        var_dump($output);

        return new Response("Response:" . implode($output));

    }

    public function successAction(Request $request)
    {
        return $this->render('register/success.html.twig');
    }
}
