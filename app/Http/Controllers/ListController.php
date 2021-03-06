<?php

namespace Trackime\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Trackime\Anime;
use Trackime\Video;
use Trackime\Custom;

class ListController extends Controller
{

	private $view = "animes.list";

	public function checkAnime($anime){
		if(is_null(Anime::where('anime', $anime)->first()))
			abort(404);
		return;
	}

	public function getList($anime){
		return Anime::where('anime', $anime)->first();
	}
	
	public function getVideo($anime){
		return Video::where('anime', $anime)->get();
	}

	public function list($anime, $loged)
	{
		return view($this->view, [
				'anime'	  => $this->getList($anime),
				'chapters'	  => $this->getVideo($anime)->toJson(),
				'custom'  => (new CustomController)->create($anime, $loged)
		]
		);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($anime)
    {
		$this->checkAnime($anime);
		return $this->list($anime, Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
