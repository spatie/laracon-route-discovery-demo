<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class VisitCommand extends Command
{
    protected $signature = 'visit {url}';

    public function handle()
    {
        echo Http::get(url($this->argument('url')));
    }
}
