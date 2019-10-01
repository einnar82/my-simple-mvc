<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\FooBarBaz;

class RootController extends Controller {

    public function get(): string {
        return view('root', [
            'title' => 'hello world',
            'array' => FooBarBaz::get(),
        ]);
    }
}
