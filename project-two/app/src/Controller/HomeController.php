<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/')]
class HomeController extends AbstractController
{
    public function __invoke() : JsonResponse
    {
        return $this->json(['project-name' => 'project-two']);
    }
}
