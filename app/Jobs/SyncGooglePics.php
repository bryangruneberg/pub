<?php

namespace App\Jobs;

use App\Bleat;
use App\Picture;
use DeepCopy\f001\B;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;

class SyncGooglePics implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach(Storage::disk('google')->listContents("/") as $file)
        {

            if($file['type'] != 'file' || $file['mimetype'] != 'image/jpeg')
            {
                continue;
            }

            $filename = $file['filename'] . "." . $file['extension'];
            $pic = Picture::where('filename', $filename)->first();
            if(!$pic)
            {
                $pic = new Picture();
                $pic->filename = $filename;
                $pic->extension = $file['extension'];
                $pic->mimetype = $file['mimetype'];
                $pic->title = $filename;
                $pic->save();
            }

            if($pic && is_null($pic->uri)) {
                if(!Storage::disk('s3')->exists($filename))
                {
                    Storage::disk('s3')->put($filename, Storage::disk('google')->get($file['path']));
                    $uri = Storage::disk('s3')->url($filename);
                } else {
                    $uri = Storage::disk('s3')->url($filename);
                }

                if($uri) {
                    $pic->uri = $uri;
                    $pic->save();

     //               $bleat = $pic->bleat;
//                    if(!$bleat) {
 //                       $bleat = new Bleat(['bleat' => $filename]);
  //                      $bleat->save();
   //                     $bleat->pictures()->save($pic);
    //                }
                }
            }
        }
    }
}
