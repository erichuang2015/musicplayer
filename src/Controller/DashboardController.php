<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{

    public function index()
    {

        $number = random_int(0, 100);

        return $this->render('dashboard.html.twig', [
            'number' => $number,
        ]);

        /*
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
        */

    }

}

