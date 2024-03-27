<?php

namespace Rpungello\APILogger\Commands;

use Illuminate\Console\Command;

class APILoggerCommand extends Command
{
    public $signature = 'laravel-api-logger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
