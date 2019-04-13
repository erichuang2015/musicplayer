<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function index()
    {

        $number = random_int(0, 100);

        return $this->render('base.html.twig', [
            'number' => $number,
        ]);

        /*
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
        */

    }

}

