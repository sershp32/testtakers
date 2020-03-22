<?php

declare(strict_types=1);

namespace App\Service;

use App\DataProvider\DataProviderFactory;
use App\DataProvider\DataProviderInterface;
use App\Dto\ListParamDto;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class TakerService
{
    private DataProviderFactory $factory;

    private SerializerInterface $serializer;

    private ValidatorInterface $validator;

    public function __construct(
        DataProviderFactory $factory,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    )
    {
        $this->factory = $factory;
        $this->serializer = $serializer;
        $this->validator = $validator;
    }

    public function list(Request $request): Response
    {
        $params = ListParamDto::createFromRequest($request);

        $errors = $this->validator->validate($params);
        if (count($errors) > 0) {
            return new Response((string)$errors);
        }

        return new Response(
            $this->serializer->serialize(
                $this->factory->getFromParam($params)->loadData(),
                $params->getListFormat()
            )
        );
    }
}
