<?php

namespace Kcdev\Setting\Commands;

use Illuminate\Console\Command;
use Kcdev\Setting\Setting;

class SettingSetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setting:set
                            {key : Setting key}
                            {value: Setting value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a setting';

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
     * @return mixed
     */
    public function handle()
    {
        Setting::set($this->argument('key'), $this->argument('value'));

        $this->info('Setting has been added successfully.');
    }
}
