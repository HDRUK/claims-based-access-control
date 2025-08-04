<?php

namespace Hdruk\ClaimsAccessControl\Services;

use Hdruk\ClaimsAccessControl\Services\ClaimMappingService;

class ClaimResolverService
{
    public ?ClaimMappingService $mapper;

    public function __construct(?ClaimMappingService $mapper = null)
    {
        $this->mapper = $mapper;
    }

    public function extractWorkgroupsForSystem(array $claims, string $system): array
    {
        $workgroups = $claims['workgroups'][$system] ?? [];
        return $this->mapper
            ? $this->mapper->mapWorkgroups($workgroups)
            : $workgroups;
    }

    public function hasWorkgroup(array $claims, string $system, string $group): bool
    {
        $resolvedGroups = $this->extractWorkgroupsForSystem($claims, $system);
        $target = $this->mapper ? $this->mapper->mapSingleWorkgroup($group) : $group;

        return in_array($target, $resolvedGroups, true);
    }
}