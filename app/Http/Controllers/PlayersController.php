<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;

class PlayersController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players_list = Players::all();
        return view('players.index')->with('list', $players_list);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players_list = Players::all();
        return view('players.create')->with('create', $players_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nickname' => 'required|min:5|max:50',
            'score' => 'required|min:5|max:50|numeric',
            'win' => 'required|min:5|max:50|numeric',
            'lose' => 'required|min:5|max:50|numeric',
            'rr' => 'required|min:5|max:50|numeric',
        ]);

        $create_players = Players::create($data);
        return redirect()->route('players.index')->with('success', 'Players with Nickname' . $create_players->nickname . 'has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Players $player)
    {
        
        return view('players.show')->with('players', $player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Players $player)
    {
        return view('players.edit')->with('players', $player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Players $player)
    {
        $data = $request->validate([
            'nickname' => 'required|min:5|max:50',
            'score' => 'required|min:5|max:50|numeric',
            'win' => 'required|min:5|max:50|numeric',
            'lose' => 'required|min:5|max:50|numeric',
            'rr' => 'required|min:5|max:50|numeric',
        ]);

        $player->update($data);
        return redirect()->route('players.index')->with('primary', 'Players with a Nickname'. $player->nickname . 'has been updated!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Players $player)
    {
        $player->delete();
        return redirect()->route('players.index')->with('danger', 'Players with a nickname' . $player->nickname. 'has beeen deleted!');
    }
}
