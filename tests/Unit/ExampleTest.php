<?php

declare(strict_types=1);

use PackageWizard\Composer\YourApp;

it('example', function () {
    expect(
        YourApp::get()
    )->toMatchSnapshot();
});
