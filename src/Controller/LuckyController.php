<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class LuckyController
{
    #[Route('/lucky/number/{id}')]
    public function number($id): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$id.'</body></html>'
        );
    }
}