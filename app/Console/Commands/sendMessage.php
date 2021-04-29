<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MessageService;

class sendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:Message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Отправка сообщения';

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
        $message->sendMessage();
        return 0;
    }
}
