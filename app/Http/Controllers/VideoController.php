<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    //
    public function uploadVideo(Request $request)
   {
        $this->validate($request, [
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
        $video = new Video;
        $video->title = $request->title;
        if ($request->hasFile('video'))
        {
            $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
            $video->video = $path;
        }
        $video->save();
   
  }

}
