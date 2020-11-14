<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

beforeEach(function () {
    $this->app->make(PermissionRegistrar::class)->registerPermissions();

    Role::create(['name' => 'admin']);
    Role::create(['name' => 'super-admin']);
});

test('guests_cant_get_admin_settings', function () {
    /* @var \Tests\TestCase $this */

    $this->get('/api/admin/settings', ['Accept' => 'application/json'])->assertStatus(401);
});

test('users_cant_get_admin_settings', function () {
    /* @var \Tests\TestCase $this */

    $this->actingAs(factory(User::class)->create(), 'api');

    $this->get('/api/admin/settings')->assertForbidden();
});

test('admins_can_get_default_admin_settings', function () {
    /* @var \Tests\TestCase $this */

    $admin = factory($user = User::class)->create();

    $admin->assignRole('admin');

    $this->actingAs($admin, 'api');

    $this->get('/api/admin/settings')->assertOk();
});
