<?php

namespace App\Http\Controllers;

use App\FeaturedArtist;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class FeaturedArtistsController extends Controller
{
    use UploadTrait;

    public function __contstruct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('featured-artists.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('featured-artists.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeaturedArtist  $featuredArtist
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedArtist $featuredArtist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeaturedArtist  $featuredArtist
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedArtist $featuredArtist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeaturedArtist  $featuredArtist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedArtist $featuredArtist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeaturedArtist  $featuredArtist
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedArtist $featuredArtist)
    {
        //
    }
}
