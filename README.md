# ClaimsAccessControl

Scoped Claims-Based Access Control for Laravel apps.

## Features
- Per-system workgroup scoping
- Token claim-based resolution
- Policy-friendly integration

## Install

```bash
    composer require hdruk/claims-based-access-control
```

## Usage

1. Add `HasScopedClaims` trait to your `User` model
2. Add your existing claim mappings

```php
$claimMappingService->setMap(<your-map-from-config>);
```
   
4. Inject claims from token or session:

```php
    $user->claims = $decodedToken['claims'] ?? [];
```

3. Use in policies:

```php
use Hdruk\ClaimsAccessControl\Services\ClaimMappingService;
use Hdruk\ClaimsAccessControl\Services\ClaimResolverService;

$claimMappingService = new ClaimMappingService();
$claimMappingService->setMap(<your-map-from-config>);

$claimResolverService = new ClaimResolverService($claimMappingService);

$claimResolverService->hasWorkgroup($claims, 'system-name', 'workgroup-string');
```

## License
MIT
