<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

class DebugCommand extends Command
{
    protected $signature = 'debug';

    protected $description = 'Command description';

    public function handle()
    {
    }
}
