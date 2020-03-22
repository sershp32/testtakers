<?php

declare(strict_types=1);

namespace App\DataProvider;

use App\Dto\ListParamDto;

final class DataProviderFactory
{
    private DataProviderInterface $csvProvider;

    public function __construct(DataProviderInterface $csvProvider)
    {
        $this->csvProvider = $csvProvider;
    }

    public function getFromParam(ListParamDto $dto): DataProviderInterface
    {
        switch ($dto->getSourceFormat()) {
            case 'csv':
                return $this->csvProvider;
            // @todo add json provider
        }
    }
}
