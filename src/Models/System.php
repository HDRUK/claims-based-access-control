<?php

namespace Hdruk\ClaimsBasedAccessControl\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = [
        'name',
        'identifier',
    ];
}