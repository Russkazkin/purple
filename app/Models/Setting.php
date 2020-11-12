<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $casts = [
        'public' => 'array',
        'admin' => 'array',
    ];

    protected $attributes = [
        'admin' => '{
            "notifications": {
                "webpushes": "1",
                "toastr": "1"
            }
        }'
    ];
}
