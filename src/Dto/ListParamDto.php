<?php

declare(strict_types=1);

namespace App\Dto;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

final class ListParamDto
{
    /**
     * @Assert\Choice({"csv", "json"})
     */
    private string $sourceFormat;

    /**
     * @Assert\Choice({"json", "xml"})
     */
    private string $listFormat;

    public function __construct(string $sourceFormat, string $listFormat)
    {
        $this->sourceFormat = $sourceFormat;
        $this->listFormat = $listFormat;
    }

    public static function createFromRequest(Request $request): self
    {
        return new ListParamDto(
            $request->query->get('source') ?? 'csv',
            $request->query->get('format') ?? 'json'
        );
    }

    public function getSourceFormat(): string
    {
        return $this->sourceFormat;
    }

    public function getListFormat(): string
    {
        return $this->listFormat;
    }
}
