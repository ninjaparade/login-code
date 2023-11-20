<?php

namespace Ninjaparade\LoginCode\Commands;

use Illuminate\Console\Command;

class LoginCodeCommand extends Command
{
    public $signature = 'login-code';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
