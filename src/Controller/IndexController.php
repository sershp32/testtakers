<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class IndexController
{
    /**
     * @Route("/", name="index_action")
     */
    public function indexAction(): JsonResponse
    {
        return new JsonResponse(['ok']);
    }
}
