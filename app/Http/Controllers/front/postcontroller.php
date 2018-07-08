<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Network;
use App\Post;
use App\Image;
use ImageInt;



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
<<<<<<< HEAD
      $file = Request()->file('img_post');
      /*$random = str_random(10);
      $nombre = $random.'-'.$file->getClientOriginalName();
      $path = public_path('uploads/'.$nombre);
      $url = '/uploads/'.$nombre;
      $image = ImageInt::make($file->getRealPath());
<<<<<<< HEAD
      $image->save($path);*/


      /*$image = ImageInt::make($file->getRealPath());
      $image->encode('data-url');
      return '<img src="'.$image.'"/>';*/
=======
      $path = false;

      if (request()->hasFile('img_post')) {
        $file = Request()->file('img_post');
        $random = str_random(10);
        $nombre = $random.'-'.$file->getClientOriginalName();
        $path = public_path('uploads/'.$nombre);
        $url = '/uploads/'.$nombre;
        $image = ImageInt::make($file->getRealPath());
        $image->save($path);
      }
      return $path;
>>>>>>> a0950d57f389ff1ef9573fe8ed84d8a7f801b7de
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
<<<<<<< HEAD

=======
>>>>>>> 630e8535045e1cc1be47b3bee4fc96267e9b582f
      $request['user_id'] = \Auth::user()->id;
      $networks = Network::all();
      $nets;
// revisa entre todas las networks cuales fueron seleccionadas
      foreach ($networks as $key => $network) {
        if (isset($request[$network['description']])) {
           $nets[] = $network['id'];
        }
      }
// graba los posts
      $post = Post::create(request()->all());
      $post->networks()->sync($nets);

      $path = $this->uploadImage();
      if ($path) {
        $image = new Image(['src' => $path, 'post_id' => $post->id]);
        $image->save();
      };
// va a la pagina de posteos
      $posts = Post::all();
      return view ('posteos', compact('posts'));
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
