<?php

namespace Siteorigin\LaravelOpenAI\Commands;

use Illuminate\Console\Command;

class LaravelOpenAICommand extends Command
{
    public $signature = 'laravel-openai';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
