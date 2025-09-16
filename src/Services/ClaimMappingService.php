<?php

namespace Hdruk\ClaimsAccessControl\Services;

class ClaimMappingService
{
    protected array $map = [];

    public function setMap(array $map, ?string $system = null): void
    {
        $system = $system ?? config('claims-access.default_system');
        $this->map[$system] = $map;
    }

    public function getMap(): array
    {
        return $this->map;
    }

    public function mapWorkgroups(array $groups, ?string $system = null): array
    {
        $system = $system ?? config('claims-access.default_system');

        return array_map(
            fn($group) => $this->map[$system][$group] ?? $group,
            $groups
        );
    }


    public function mapSingleWorkgroup(string $group, ?string $system = null): string
    {
        $system = $system ?? config('claims-access.default_system');
        return $this->map[$system][$group] ?? $group;
    }
}
