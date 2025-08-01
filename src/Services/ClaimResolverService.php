<?php

namespace Hdruk\ClaimsAccessControl\Services;

class ClaimResolverService
{
    public function extractRolesForSystem(array $claims, string $system): array
    {
        return $claims['workgroups'][$system] ?? [];
    }

    public function hasRole(array $claims, string $system, string $role): bool
    {
        return in_array($role, $this->extractRolesForSystem($claims, $system));
    }
}