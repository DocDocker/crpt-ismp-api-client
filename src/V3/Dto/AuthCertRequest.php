<?php

declare(strict_types=1);

namespace Lamoda\IsmpClient\V3\Dto;

final class AuthCertRequest
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $data;

    public function __construct(string $uuid, string $data)
    {
        $this->uuid = $uuid;
        $this->data = $data;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
