<?php

use App\Models\User;

test('guests_cant_get_admin_settings', function () {
    /* @var \Tests\TestCase $this */

    $this->get('/api/admin/settings', ['Accept' => 'application/json'])->assertStatus(401);
});

test('users_cant_get_admin_settings', function () {
    /* @var \Tests\TestCase $this */

    $this->actingAs(factory(User::class)->create(), 'api');

    $this->get('/api/admin/settings')->assertForbidden();
});
