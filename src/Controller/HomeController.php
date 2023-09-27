<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/hello/{name}', name: 'home')]
    public function index(string $name = ''): Response
    {

      // dump($name);

      if ($name) {
        $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }

        return new Response(<<<EOF
          <html>
            <body>
              $greet
            </body>
          </html>
          EOF
          );
    }
}
