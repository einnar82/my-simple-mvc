<?php

namespace App\Models;

class FooBarBaz extends Model {

    public static function get(): array {
        return [
            'foo',
            'bar',
            'baz',
        ];
    }
}
