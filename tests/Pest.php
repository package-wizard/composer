<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

uses(TestCase::class)
    ->in('Feature')
    ->afterEach(function () {
        expect('fallback')->toMatchSnapshot();
    });
