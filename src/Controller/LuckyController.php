<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use  Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'

        );
    }



    #[Route('/')]
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


    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
      if ($slug) {
        $title = 'Genre' .u(str_replace('-', ' ', $slug))->title(true);
      }
      else {
        $title = 'All genres';
      }
        return new Response($title);
    }
}
