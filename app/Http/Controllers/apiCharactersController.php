<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Comics;


class apiCharactersController extends Controller
{
 
    public function index()
    {
        return Character::all();
    }

    

    public function store(Request $request)
    {
        Character::create($request->all());
    }

  
    public function show($id)
    {
        return Character::findOrFail($id);
    }

  
    public function update(Request $request, $id)
    {
        $character = Character::findOrFail($id);
		$character->update($request->all());
    }

    public function destroy($id)
    {
        $character = Character::findOrFail($id);
		$character->delete();
    }
	public function comics($id){
		return  Character::with(['comics'])->find($id);
	}
	
	public function series($id){
		return Character::with(['series'])->find($id);
	}
	
	public function stories($id){
		return Character::with(['stories'])->find($id);
	}
	
	public function events($id){
		return Character::with(['events'])->find($id);
	}
}
