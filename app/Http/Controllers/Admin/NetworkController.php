<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Network;
use App\Post;
use ImageInt;


class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $networks = Network::all();
        return view('admin.networks.index', compact('networks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.networks.addNet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $nombre = $this->uploadImage();
      $network = new Network(
        [ 'description' => $request->description,
          'image' => $nombre,
          'characters' => $request->characters,
          'view' => $request->view,
        ]);
      $network->save();
      return redirect('/admin/networks');
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
      $Network = Network::find($id);
      $Network->delete();
      return redirect('/admin/networks');
    }

    public function uploadImage()
    {
      $file = Request()->file('image');
      $nombre = false;

      if (request()->hasFile('image')) {
        $file = Request()->file('image');
        $random = str_random(10);
        $nombre = $random.'-'.$file->getClientOriginalName();
        $path = public_path('logos/'.$nombre);
        $url = '/logos/'.$nombre;
        $image = ImageInt::make($file->getRealPath());
        $image->save($path);
      }
      return $nombre;

    }

}
