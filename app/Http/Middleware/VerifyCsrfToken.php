<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'registrasi',
        'admin/course/create/store',
        'admin/kategori/create/store',
        'admin/login/auth',
        'admin/kategori/edit/update/*',
        'admin/kategori/delete/*'
    ];
}