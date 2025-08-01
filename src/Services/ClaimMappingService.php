<?php

namespace Hdruk\ClaimsAccessControl\Services;

class ClaimMappingService
{
    protected array $map = [];

    public function setMap(array $map): void
    {
        $this->map = $map;
    }

    public function mapWorkgroups(array $groups): array
    {
        return array_map(fn($group) => $this->map[$group] ?? $group, $groups);
    }

    public function mapSingleWorkgroup(string $group): string
    {
        return $this->map[$group] ?? $group;
    }
}