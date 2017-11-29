<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        // Temporarily increase memory limit to 256MB
        ini_set('memory_limit','256M');

        $unitTesting = true;
        $testEnvironment = 'testing';

        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
    /**
     * Default preparation for each test
     */
    public function setUp()
    {
        parent::setUp();
        $this->prepareForTests();
    }

    /**
     * Migrates the database and set the mailer to 'pretend'.
     * This will cause the tests to run quickly.
     */
    private function prepareForTests()
    {
        Artisan::call('migrate');
        Mail::pretend(true);
    } 

}




