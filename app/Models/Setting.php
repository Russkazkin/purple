<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Yaml\Yaml;

class Setting extends Model
{
    protected $casts = [
        'public' => 'array',
        'admin' => 'array',
    ];

    public function getAdminAttribute()
    {
        return Yaml::parseFile(config_path('settings/admin.yaml'));
    }
}
