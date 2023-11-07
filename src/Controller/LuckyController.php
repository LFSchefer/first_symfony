<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use  Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class LuckyController extends AbstractController
{
    #[Route('/lucky/number', name: 'lucky')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'

        );
    }



    #[Route('/', name: 'app_home')]
    public function homepage(): Response
    {
      $tracks = [
        ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
        ['song' => 'Waterfalls', 'artist' => 'TLC'],
        ['song' => 'Creep', 'artist' => 'Radiohead'],
        ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
        ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
        ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
      ];


      return $this->render('vinyl/homepage.html.twig', [
        'title' => 'PB & James',
        'tracks' => $tracks
      ]);
    }
}
