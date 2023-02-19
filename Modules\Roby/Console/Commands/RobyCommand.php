<?php

namespace Modules\Roby\Console\Commands;

use Illuminate\Console\Command;

class RobyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:RobyCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Roby Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
