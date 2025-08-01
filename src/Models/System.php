<?php

namespace ClaimsBasedAccessControl\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = [
        'name',
        'identifier',
    ];
}