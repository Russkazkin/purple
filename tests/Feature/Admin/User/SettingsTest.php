<?php

test('guests_cant_get_settings', function () {
    /* @var \Tests\TestCase $this */

    $this->withExceptionHandling();

    $this->get('/api/settings')->assertForbidden();
});
