<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Player;

class PlayerController extends Controller
{
    // display a listing of the resource
    public function index()
    {
        dump("This is a debug message.");
        $players = Player::all();
        return response()->json($players);
    }
    //create a new created resource in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name"=> "required|string",
            "email"=> "required|string",
        ]) ;

        $player = Player::create($validatedData); 
        return response()->json($player,201);
    }

    public function show(Player $player)
    {
        return response()->json($player);
    }
    // display the specified resource.
    public function update(Request $request, Player $player)
    {
        $validatedData = $request->validate([
            "name"=> "required|string",
            "email"=> "required|string",
            ]) ;
            $player->update($validatedData);

            return response()->json($player,200);
    }

    //remove resource
    public function destroy(Player $player)
    {
        $player->delete();

        return response()->json(null,204);
    }
}