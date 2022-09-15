<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams_list = Teams::all();
        return view('teams.index')->with('list', $teams_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams_list = Teams::all();
        $players_list = Players::all();
        return view('teams.create')->with('create', $teams_list)->with('players' ,$players_list);
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
            'name_clan' => 'required|min:5|max:50',
            'users_id' => Auth::user()->id,
            'win' => 'required|min:5|max:50|numeric',
            'lose' => 'required|min:5|max:50|numeric',
            'players_count' => 'required|min:5|max:50|numeric',
        ]);

        $create_teams = Teams::create($data);
        return redirect()->route('teams.index')->with('success', 'Teams with a Name' . $create_teams->name_clan . 'has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $team)
    {
        return view('teams.show')->with('teams', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams $team)
    {
        return view('teams.edit')->with('teams', $team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teams $team)
    {
        $data = $request->validate([
            'name_clan' => 'required|min:5|max:50',
            'win' => 'required|min:5|max:50|numeric',
            'lose' => 'required|min:5|max:50|numeric',
            'players_count' => 'required|min:5|max:50|numeric',
        ]);

        $team->update($data);

        return redirect()->route('teams.index')->with('primary', 'Teams with a Name'. $team->name_clan . 'has been updated!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $team)
    {
        $team->delete();
        return redirect()->route('players.index')->with('danger', 'Teams with a Name' . $team->name_clan. 'has beeen deleted!');
    }
}
