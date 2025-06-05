<?php

namespace Shovit\DemoPackage\Commands;

use Illuminate\Console\Command;
use Shovit\DemoPackage\Models\Wish;

class DemoPackageCommand extends Command
{
    public $signature = 'demopackage';

    public $description = 'My command for Wishing';

    public function handle(): int
    {

        $text  = config('demopackage.Output');

        $this->comment($text);
        
        $this->comment('This Command is now sent from the Shovit\DemoPackage\Commands\DemoPackageCommand');

        $latest = Wish::orderBy('created_at','desc')->first();

        if($latest){
            $this->comment('The most recent birthday was of: ' . $latest->name);
        } else {
            $this->comment('No recent birthday records found');
        }

        return self::SUCCESS;
    }
}
