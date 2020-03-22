<?php

declare(strict_types=1);

namespace App\DataProvider;

use App\Dto\TakerDto;

final class CsvDataProvider implements DataProviderInterface
{
    private string $projectDir;

    public function __construct(string $projectDir)
    {
        $this->projectDir = $projectDir;
    }

    public function loadData(): iterable
    {
        $h = fopen($this->projectDir . '/testtakers.csv', 'r');

        for ($i = 0; $row = fgetcsv($h); $i++) {
            if ($i === 0) {
                continue;
            }

            yield new TakerDto(
                $row[0],
                $row[1],
                $row[2],
                $row[3],
                $row[4],
                $row[5],
                $row[6],
                $row[7],
                $row[8],
            );
        }

    }
}
