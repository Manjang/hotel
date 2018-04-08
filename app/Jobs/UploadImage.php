<?php

namespace App\Jobs;

use App\Hotel;

use Storage;

use File;
use Image;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UploadImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $hotel;
    public $fileId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Hotel $hotel, $fileId)
    {
        $this->hotel = $hotel;
        $this->fileId = $fileId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $path = storage_path() . '/uploads/' . $this->fileId;
        $fileName =  $this->fileId . '.png';

        Image::make($path)->encode('png')->fit(260, 180, function($c) {
            $c->upsize();
        })->save();

        if (Storage::disk('s3images')->put('hotel_thumbnail/' . $fileName, fopen($path, 'r+'))) {
            File::delete($path);
        }; 

        $this->hotel->hotel_thumbnail = $fileName;
        $this->hotel->save();
    }
}
