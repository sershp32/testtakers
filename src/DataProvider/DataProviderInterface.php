<?php

declare(strict_types=1);

namespace App\DataProvider;

use App\Dto\TakerDto;

interface DataProviderInterface
{
    /**
     * @return TakerDto[]
     */
    public function loadData(): iterable;
}
