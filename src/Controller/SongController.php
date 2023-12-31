<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;


class SongController extends AbstractController
{
    #[Route('api/song/{id<\d+>}', name: 'get_song' ,methods: ['GET'])]
    public function getSong(int $id, LoggerInterface $logger): Response
    {
      $song = [
        'id' => $id,
        'name' => 'Waterfalls',
        'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
      ];

      $logger->info('Returning API response for song {song}', [
        'song' => $id,
      ]);

      return new JsonResponse($song);
    }
}
