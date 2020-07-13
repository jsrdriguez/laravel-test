<?php

namespace App\Console\Commands;

use App\Services\RequestPostService;
use Illuminate\Console\Command;

class SendPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:post {--data=*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command send post';

    /**
     * Create a new command instance.
     *
     * @param RequestPostService $service
     */
    protected $service;

    public function __construct(RequestPostService $service)
    {
        parent::__construct();
        $this->service = $service;
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = $this->option('data');

        $this->service->send($data);
    }
}
