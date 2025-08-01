<?php

namespace Hdruk\ClaimsAccessControl\Traits;

trait HasScopedClaims
{
    private function getClaims(): array
    {
        return $this->claims ?? [];
    }

    private function workgroupsForSystem(string $system): array
    {
        $claims = $this->getClaims();
        return $claims['workgroups'][$system] ?? [];
    }

    public function hasSystemWorkgroup(string $system, string $role): bool
    {
        return in_array($role, $this->workgroupsForSystem($system));
    }
}