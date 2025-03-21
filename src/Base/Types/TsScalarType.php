<?php

namespace djfhe\StanScript\Base\Types;

use djfhe\StanScript\TsType;

class TsScalarType extends TsType
{
    
    public function __construct(
        protected string $value
    ) {}

    public function toTypeDefinition(bool $inline): string
    {
        return $this->value;
    }

    protected function getChildren(): array
    {
        return [];
    }
}