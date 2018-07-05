<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Network;
use App\Post;
use Intervention\Image;



class Postcontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view ('posteos', compact('posts'));
    }

    public function uploadImage()
    {
      $file = Request::file('image');
      /*$random = str_random(10);
      $nombre = $random.'-'.$file->getClientOriginalName();
      $path = public_path('uploads/'.$nombre);
      $url = '/uploads/'.$nombre;
      $image = Image::make($file->getRealPath());
      $image->save($path);*/

      $image = Image::make($file->getRealPath());
      $image->encode('data-url');
      return '<img src="'.$image.'"/>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function preview(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request['user_id'] = \Auth::user()->id;
      $networks = Network::all();
      $nets;

      foreach ($networks as $key => $network) {
        if (!isset($request[$network['description']])) {
           $nets[] = $network['id'];
        }
      }
      $post = Post::create(request()->all());
      $post->networks()->sync($nets);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
