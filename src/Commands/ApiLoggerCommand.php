<?php

namespace Rpungello\ApiLogger\Commands;

use Illuminate\Console\Command;

class ApiLoggerCommand extends Command
{
    public $signature = 'laravel-api-logger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
