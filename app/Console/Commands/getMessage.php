<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MessageService;

class getMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Получение сообщения';

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
        $message = new MessageService();
        $message->getMessage();
        return 0;
    }
}
