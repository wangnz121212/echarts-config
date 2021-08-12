<?php

use Illuminate\Support\Arr;

require_once __DIR__ . '/../vendor/autoload.php';

dump(Arr::get(['a' => ['b' => 1]], 'a.b', -1));
