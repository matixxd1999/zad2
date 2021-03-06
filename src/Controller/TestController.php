<?php

namespace App\Controller;

use App\Entity\Msw;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function index(): Response
    {
        $rcp = $this->getDoctrine()->getRepository(Msw::class)->getRcp();
        $evenNumber=null;
        $tablica=$rcp;
        $numberOfRecord = count($tablica);

        for ($i=0; $i < $numberOfRecord; $i++) {
            $tablica[$i]['inicial'] = substr_replace($tablica[$i]['inicial'], '.', 1, 0);
            $tablica[$i]['inicial'] = substr_replace($tablica[$i]['inicial'], '.', 3, 0);
        }

        if ($numberOfRecord%2==0){
            $countArray = ($numberOfRecord/2)-1;               //Jeśli liczba jest parzysta
            $evenNumber = $countArray;
        }
        else {
            $countArray = ($numberOfRecord/2)-0.5;             // Jeśli liczba jest nieparzysta
        }

        header("Refresh: 5");

            return $this->render('test/index.html.twig', [
            'countArray' => $countArray,
            'repoMsw' => $tablica,
            'evenNumber' => $evenNumber,
            ]);
    }
}

































//        $tablica = [['rcp'=> 111, 'inicial'=> 'ML', 'ilosc'=> 893],
//        ['rcp'=> 222, 'inicial'=> 'KL', 'ilosc'=> 870],
//        ['rcp'=> 333, 'inicial'=> 'FD', 'ilosc'=> 840],
//        ['rcp'=> 444, 'inicial'=> 'SF', 'ilosc'=> 820],
//        ['rcp'=> 555, 'inicial'=> 'AS', 'ilosc'=> 800],
//        ['rcp'=> 666, 'inicial'=> 'FD', 'ilosc'=> 735],
//        ['rcp'=> 777, 'inicial'=> 'GF', 'ilosc'=> 725],
//        ['rcp'=> 888, 'inicial'=> 'GH', 'ilosc'=> 720],
//        ['rcp'=> 999, 'inicial'=> 'FG', 'ilosc'=> 700],
//        ['rcp'=> 101010, 'inicial'=> 'HV', 'ilosc'=> 645],
//        ['rcp'=> 111111, 'inicial'=> 'DF', 'ilosc'=> 620],
//        ['rcp'=> 121212, 'inicial'=> 'VC', 'ilosc'=> 600],
//        ['rcp'=> 131313, 'inicial'=> 'SD', 'ilosc'=> 590],
//        ['rcp'=> 141414, 'inicial'=> 'WE', 'ilosc'=> 550],
//        ['rcp'=> 151515, 'inicial'=> 'RY', 'ilosc'=> 540],
//        ['rcp'=> 161616, 'inicial'=> 'UY', 'ilosc'=> 520],
//        ['rcp'=> 171717, 'inicial'=> 'IU', 'ilosc'=> 500],
//        ['rcp'=> 181818, 'inicial'=> 'TY', 'ilosc'=> 400],
//        ['rcp'=> 191919, 'inicial'=> 'GH', 'ilosc'=> 370],
//        ['rcp'=> 202020, 'inicial'=> 'GH', 'ilosc'=> 260],
//        ['rcp'=> 212121, 'inicial'=> 'MN', 'ilosc'=> 230],
//        ['rcp'=> 222222, 'inicial'=> 'LH', 'ilosc'=> 196],
//        ];
