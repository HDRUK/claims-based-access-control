<?php

namespace ClaimsAccessControl\Traits;

trait HasScopedClaims
{
    private function getClaims(): array
    {
        return $this->claims ?? [];
    }

    private function rolesForSystem(string $system): array
    {
        $claims = $this->getClaims();
        return $claims['workgroups'][$system] ?? [];
    }

    public function hasSystemRole(string $system, string $role): bool
    {
        return in_array($role, $this->rolesForSystem($system));
    }
}