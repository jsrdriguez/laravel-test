<?php

namespace App\Jobs;

use App\Services\RequestPostService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    /**
     * @var RequestPostService
     */

    protected $service;

    public function __construct($data)
    {
        $this->data = $data;
        $this->service = new RequestPostService();
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->service->send($this->data);
    }

    public function failed(\Exception $exception)
    {
        Log::alert('Jobs Failed');
    }
}
