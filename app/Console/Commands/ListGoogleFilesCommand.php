<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ListGoogleFilesCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'google:list-files';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'List Google Files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
      foreach(Storage::disk('google')->listContents("/") as $file) 
      {
        $this->info("File: "); print_r($file);
      }
    }
}
