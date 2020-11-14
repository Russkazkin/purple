<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    private string $default;

    protected $casts = [
        'public' => 'array',
        'admin' => 'array',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->default = file_get_contents(config_path('settings/admin.json'));
    }

    public function getAdminAttribute()
    {
        return $this->castAttribute('admin', $this->default);
    }
}


