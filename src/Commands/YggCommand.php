<?php

namespace Aesir\Ygg\Commands;

use Illuminate\Console\Command;

class YggCommand extends Command
{
    public $signature = 'ygg';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
