<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\TakerService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TakerController
{
    private TakerService $service;

    public function __construct(TakerService $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("list", name="list_action")
     */
    public function listAction(Request $request): Response
    {
        return $this->service->list($request);
    }
}
