<?php

namespace Roberts\LaravelWhitelist\Commands;

use Illuminate\Console\Command;

class LaravelWhitelistCommand extends Command
{
    public $signature = 'laravel-whitelist';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
