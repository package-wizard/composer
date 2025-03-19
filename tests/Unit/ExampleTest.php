<?php

declare(strict_types=1);

use PackageWizard\ComposerLight\YourApp;

it('example', function () {
    expect(
        YourApp::get()
    )->toMatchSnapshot();
});
