<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\Catagory;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::with('image_get')->with('cat_get')->get();
        return view('admin.main.post.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagory = Catagory::get()->pluck('name', 'id')->prepend('Please select', '');
        return view('admin.main.post.create', compact('catagory'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $destinationPath = 'dist/uplaod_img';
            $file->move($destinationPath, $fileNameToStore);
            $iamge = new Image();
            $iamge->url = $fileNameToStore;
            $iamge->path = $destinationPath . '/';
            $iamge->save();


        }
        $videolink = $request->video;

        $post = new Post();
        $post->post = $request->post;
        $post->cat_id = $request->category;
        $post->cat_id = $request->category;
        $post->video_link = $request->video;
        $post->image = $iamge->id;
        $post->save();
        return redirect()->route('admin.post.index');


//        $new = "https://www.youtube.com/embed/";
//        $convert = substr($videolink, 32);
//        $total = $new . $convert;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $catagory = Catagory::get()->pluck('name', 'id')->prepend('Please select', '');

        $data = Post::with('image_get')->with('cat_get')->where('id', $id)->first();

        return view('admin.main.post.edit', compact('catagory', 'data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $iamge = $post->image;
        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $destinationPath = 'dist/uplaod_img';
            $file->move($destinationPath, $fileNameToStore);
            $iamge = Image::find($post->image);
            if (!$iamge) {
                $iamge = new Image();
            }
            $iamge->url = $fileNameToStore;
            $iamge->path = $destinationPath . '/';
            $iamge->save();
            $iamge = $iamge->id;
        }
        $videolink = $request->video;

        $post->post = $request->post;
        $post->cat_id = $request->category;
        $post->cat_id = $request->category;
        $post->video_link = $request->video;
        $post->image = $iamge;
        $post->link = $request->link;

        $post->save();
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $image = $post->image;
            if ($image) {
                $image1 = Image::find($image);
                $image1->delete();
            }
            $post->delete();
        }
        return redirect()->route('admin.post.index');
    }
}
