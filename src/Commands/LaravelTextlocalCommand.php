<?php

namespace Rudolphp\LaravelTextlocal\Commands;

use Illuminate\Console\Command;

class LaravelTextlocalCommand extends Command
{
    public $signature = 'laravel-textlocal';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
