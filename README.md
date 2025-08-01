# ClaimsAccessControl

Scoped Claims-Based Access Control for Laravel apps.

## Features
- Per-system workgroup scoping
- Token claim-based resolution
- Policy-friendly integration

## Install

```bash
composer require your-org/claims-access-control
```

## Usage

1. Add `HasScopedClaims` trait to your `User` model
2. Inject claims from token or session:
```php
$user->claims = $decodedToken['claims'] ?? [];
```
3. Use in policies:
```php
$user->hasSystemRole('crm', 'editor');
```

## License
MIT