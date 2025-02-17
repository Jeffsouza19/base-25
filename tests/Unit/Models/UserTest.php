<?php

declare(strict_types = 1);

namespace Tests\Unit\Models;

use App\Models\User;
use ReflectionMethod;

test('cast', function (): void {
    $user = new User();

    $reflection = new ReflectionMethod($user, 'casts');

    $casts = $reflection->invoke($user);

    expect($casts)->toBe([
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
    ]);
});
