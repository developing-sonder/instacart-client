<?php

namespace Developing Sonder\InstacartClient\Commands;

use Illuminate\Console\Command;

class InstacartClientCommand extends Command
{
    public $signature = 'instacart';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
