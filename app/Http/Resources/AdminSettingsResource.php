<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminSettingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'settings',
            'id' => $this->id ?? 'default',
            'relationships' => [
                'user' => [
                    'user_id' => auth()->user()->id,
                    'links' => [
                        'self' => '/user/' . auth()->user()->id,
                    ]
                ]
            ],
            'data' => $this->admin,
        ];
    }
}
