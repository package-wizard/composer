<?php

declare(strict_types=1);

it('example', function (int $attempt) {
    expect($attempt)->toBeGreaterThan(0);
    expect(['attempt' => $attempt])->toMatchSnapshot();
})->repeat(5);
