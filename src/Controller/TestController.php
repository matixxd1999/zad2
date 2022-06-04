<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function index(): Response
    {

        $tablica=[['rcp'=> 19505, 'inicial'=> 'ML', 'ilosc'=> 893],
        ['rcp'=> 3456, 'inicial'=> 'KL', 'ilosc'=> 870],
        ['rcp'=> 3456, 'inicial'=> 'FD', 'ilosc'=> 840],
        ['rcp'=> 35463, 'inicial'=> 'SF', 'ilosc'=> 820],
        ['rcp'=> 24505, 'inicial'=> 'AS', 'ilosc'=> 800],
        ['rcp'=> 9505, 'inicial'=> 'FD', 'ilosc'=> 735],
        ['rcp'=> 4567, 'inicial'=> 'GF', 'ilosc'=> 725],
        ['rcp'=> 5463, 'inicial'=> 'GH', 'ilosc'=> 720],
        ['rcp'=> 2456, 'inicial'=> 'FG', 'ilosc'=> 700],
        ['rcp'=> 35423, 'inicial'=> 'HV', 'ilosc'=> 645],
        ['rcp'=> 2545, 'inicial'=> 'DF', 'ilosc'=> 620],
        ['rcp'=> 2534, 'inicial'=> 'VC', 'ilosc'=> 600],
        ['rcp'=> 23454, 'inicial'=> 'SD', 'ilosc'=> 590],
        ['rcp'=> 2545, 'inicial'=> 'WE', 'ilosc'=> 550],
        ['rcp'=> 1876, 'inicial'=> 'RY', 'ilosc'=> 540],
        ['rcp'=> 7564, 'inicial'=> 'UY', 'ilosc'=> 520],
        ['rcp'=> 4656, 'inicial'=> 'IU', 'ilosc'=> 500],
        ['rcp'=> 3450, 'inicial'=> 'TY', 'ilosc'=> 400],
        ['rcp'=> 3456, 'inicial'=> 'GH', 'ilosc'=> 370],
        ['rcp'=> 7645, 'inicial'=> 'GH', 'ilosc'=> 260],
        ['rcp'=> 7655, 'inicial'=> 'MN', 'ilosc'=> 230],
        ['rcp'=> 4532, 'inicial'=> 'LH', 'ilosc'=> 196],
    ];
//        dd($tablica);
            return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'repoMsw' => $tablica,
        ]);
    }
}
