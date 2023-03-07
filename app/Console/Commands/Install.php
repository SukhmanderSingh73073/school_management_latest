<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
// use Laravel\Passport\Client;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'school:install {db=refresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrates Database , Seeds Database , Generates Passport Token , Sets in env';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $type = $this->argument('db');
        $acceptedArgs = ['fresh', 'refresh'];
        if (in_array($type, $acceptedArgs)) {
            $this->line('Received Type' . $this->argument('db'));
            $this->verifyPHPVersion();
            $this->verifyExtensions();
            $this->verifyWritePermissions();
            $this->generateAppKey();
            $this->setupDatabase($type);
            $this->seedDatabase();
            // $this->configurePassport();
            $this->setupGoogleV3reCAPTCHA();
            $this->linkStorage();
            $this->clearCache();
            $this->line('Installation Complete');
            $this->line('-----------------------------------------------------');
            $this->line('| Login Email    ====> super@admin.com                |');
            $this->line('| Login Password ===>  Qwerty@123                     |');
            $this->line('-----------------------------------------------------');
        } else {
            $this->error('Invalid Argument ' . $type);
        }
    }



    /**
     * Link Storage
     *
     * @return void
     */
    protected function linkStorage()
    {
        $this->info('Link Storage');
        $this->call('storage:link');
    }

    /**
     * Clears Config Cache after updating env file
     *
     * @return void
     */
    protected function clearCache()
    {
        $this->info('Clear Config Cache');
        $this->call('config:clear');
        $this->call('optimize:clear');
    }

    /**
     * Check if environment is Local
     *
     * @return void
     */
    protected function isLocaleEnvironment()
    {

        // $environmentArray =  DotenvEditor::getKeys(['APP_ENV']);

        // $currentEnvironment = $environmentArray['APP_ENV']['value'];
        // $this->info('Current Enviroment ' . json_encode($environmentArray['APP_ENV']['value']));

        // if ($currentEnvironment == 'local') {
        //     return true;
        // }
        return false;
    }


    /**
     * Run all the seeders.
     * Must be deleted
     * @return void
     */
    // protected function configurePassport()
    //{
    // $this->line('Setting Up Passport');

    // $this->call('passport:install');

    // $passwordClient =   Client::where('password_client', 1)->first();

    // DotenvEditor::setKey('PASSWORD_CLIENT_ID', $passwordClient->id);

    // DotenvEditor::setKey('PASSWORD_CLIENT_SECRET', $passwordClient->secret);
    // DotenvEditor::save();

    // $this->info('Passport Key Successfully Set');
    // }

    /**
     * Run all the seeders.
     *
     * @return void
     */
    protected function seedDatabase()
    {
        $this->line('Seeding Database');
        $this->call('db:seed');
        $this->info('Database Seeding successful');
    }




    /**
     * Generate private application key.
     *
     * @return void
     */
    protected function generateAppKey()
    {
        $this->line('discovering livewire ..');
        $this->call('livewire:discover' );
        $this->info('discovering livewire successfully.');

        $this->line('Generating application key..');
        $this->call('key:generate', ['--force' => true]);
        $this->info('Application key generated successfully.');
    }

    /**
     * Setup the database.
     *
     * @return void
     */
    protected function setupDatabase($type)
    {
        $this->line('Received Type ' . $type);
        $this->line('Installing the database...');
        if ($type == "fresh") {
            $this->info('Running Fresh Database Migration');
            $this->call('migrate:fresh', ['--force' => true]);
        } else {
            $this->info('Running  Database Refresh');
            $this->call('migrate:refresh');
        }


        $this->info('Database installed successfully.');
    }



    /**
     * Verify that the command is running on the required PHP version.
     *
     * @return bool
     */
    protected function verifyPHPVersion()
    {
        $this->line('Verifying PHP version..');

        if (version_compare(PHP_VERSION, '7.2.5', '>=')) {
            $this->info('PHP Version is verified successfully.');

            return true;
        }

        $this->info(
            sprintf('You are trying to run the installer using an old PHP version (%s). Please use the required PHP version or newer to continue.', PHP_VERSION)
        );

        exit;
    }

    /**
     * Verify required PHP extensions.
     *
     * @return void
     */
    protected function verifyExtensions()
    {
        $this->line('Verifying PHP extensions..');

        $extensions = [
            'pdo_mysql', 'openssl', 'mbstring', 'tokenizer', 'curl',
        ];

        foreach ($extensions as $extension) {
            if (!extension_loaded($extension)) {
                $this->info(
                    sprintf('PHP extension %s is not enabled.', $extension)
                );

                exit;
            }
        }

        $this->info('PHP extensions verified successfully.');
    }

    /**
     * Verify if specified folders are writable.
     *
     * @return void
     */
    protected function verifyWritePermissions()
    {
        $this->line('Verifying folder write permissions..');

        $paths = [
            config_path('/'), storage_path('/')
        ];

        foreach ($paths as $path) {
            if (!is_writable($path)) {
                $this->info(
                    sprintf('The following path is not writable (%s). Please change folder permissions.', $path)
                );

                exit;
            }
        }

        $this->info('Folder permissions are verified successfully.');
    }


    /**
     * setup Google V3 reCAPTCHA Keys.
     *
     * @return void
     */
    protected function setupGoogleV3reCAPTCHA()
    {

    }
}
