<?php

namespace Shovit\DemoPackage\Commands;

use Illuminate\Console\Command;

class DemoPackageCommand extends Command
{
    public $signature = 'demopackage';

    public $description = 'My command for Wishing';

    public function handle(): int
    {

        $text  = config('demopackage.Output');

        $this->comment($text);
        
        $this->comment('All done');

        $this->comment('The above Command is sent from the Shovit\DemoPackage\Commands\DemoPackageCommand');

        return self::SUCCESS;
    }
}
