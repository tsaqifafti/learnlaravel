<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
// use Pbmedia\LaravelFFMpeg\FFMpegFacade as FFMpeg;
use Illuminate\Support\Facades\Storage;
use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;
use FFMpeg\Coordinate\TimeCode;


class VideoController extends Controller
{
    /**
     * Display the upload view.
     */
    public function create(): View
    {
        return view('admin.addvideo');
    }

    public function edit(): View
    {
        return view('admin.editvideo');
    }


    /**
     * Handle an incoming upload request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'video' => 'required|mimes:mp4,ogx,oga,mkv,ogv,ogg,webm,mpeg,mov',
        ]);

        $video = $request->file('video');
        $video->move('upload', $video->getClientOriginalName());
        $video_name = $video->getClientOriginalName();

        // $thumbnailPath = $this->createThumbnail($video_name);

        //$videoName = time(). '.' . $video->getClientOriginalExtension();
        //$video->move(public_path('videos'), $videoName);
        $data = $request->all();
        
        // $insert = new Video();
        // $insert->Video = $video_name;
        // $insert->save();


        Video::create([
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'kategori' => $data['kategori'],
            'video' => $video_name,
            'thumbnail' => "testing",
        ]);

        return redirect()->intended('/admin/addvideo')->with('success', 'Video berhasil diunggah!');

    }

    // protected function createThumbnail($video_name)
    // {
    //     $ffprobePath = env('FFPROBE_PATH');
    //     $ffprobe = FFProbe::create([
    //         'ffprobe.binaries' => $ffprobePath,
    //     ]);
    //     $ffmpeg = FFMpeg::create();
    //     $videoPath = $video->get('upload/' . $video_name);
    
    //     // Buat thumbnail pada detik ke-1 (misalnya)
    //     $thumbnailPath = public_path('thumbnails/' . $video_name . '.jpg');
    //     $video = $ffmpeg->open($videoPath);
    //     $frame = $video->frame(TimeCode::fromSeconds(1));
    //     $frame->save($thumbnailPath);

    //     return 'thumbnails/' . $video_name . '.jpg';
    // }

    public function fetch()
    {
      $dataVideo = Video::all()->toArray();
      return view('admin.dashboard',compact('dataVideo'));
    }

    public function kategoriUser()
    {
        $userVideo = Video::where('kategori', 0)->get();
        return view('dashboardUser', compact('userVideo'));
    }

    public function kategoriMitra()
    {
        $mitraVideo = Video::where('kategori', 1)->get();
        return view('dashboardMitra', compact('mitraVideo'));
    }

}
