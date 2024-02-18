<?php

namespace App\Http\Controllers;

use App\Models\songs;
use Illuminate\Http\Request;

class SongController extends Controller
{
    
    public function index(){
        $addedsong=songs::all(); //call out all data from form and insert it into $songadded 
        return view('taskjunior.index',['addedsong'=> $addedsong]);//pass the parameter to the indax page
    }
    public function contenu(songs $songdetails){
        //dd($songdetails); ===> shows us the data (used for verification)
        return view('taskjunior.song',['songdetails'=> $songdetails]); // pass the informations to the song page 
        
    }
    public function addsong(){
        return view('taskjunior.share');

    }
    public function store(Request $request){ //$request is the data from the form
        $data=$request->validate([
            'songtitle'=>'required',
            'artist'=>'required',
            'description'=>'required',
            'songlink'=>'required',
            'lyrics'=>'required',
            'platform'=>'required',
        ]);
        $newsong=songs::create($data) ; //to save data into databse we have to go through the model 'songmodel'
        return redirect(route('taskjunior.index'));

    }
}
