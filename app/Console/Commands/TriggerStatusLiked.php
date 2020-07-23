<?php

namespace App\Console\Commands;

use App\Events\StatusLiked;
use Illuminate\Console\Command;

class TriggerStatusLiked extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:status-liked';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Trigger event status liked';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return event(new StatusLiked('Someone'));
    }
}
