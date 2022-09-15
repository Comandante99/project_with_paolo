@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="container my-5">
      <h2 class="text-center">Create Teams</h2>
     <form action="{{ route('teams.store')}}" method="POST">
       @csrf
         <div class="form-group my-4">
            <label for="name_clan">name clan</label>
            <input type="text" class="form-control" id="name_clan" name="name_clan"  value="{{ old('name_clan') }}">
        </div> 
         @error('name_clan')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="players_id" class="form-label">Owner Clan</label>
            {{-- <input  class="form-control"  list="player_id" name="players_id" id="players_id" placeholder="Type to search...."> --}}
            <datalist id="player_id">
               @foreach ($players as $player)
               <option value="{{old('users_id') }}">{{$player->nickname}}</option>
               @endforeach
            </datalist>
            <select class="form-select" name="player_id" id="player_id">
               <option disabled selected value> -- select an option -- </option>
               @foreach ($players as $player)
                     <option value="{{ $player->id }}">{{ $player->nickname }}</option>
                     @endforeach
               </select>
         
        </div> 
         @error('owner_clan')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="win">win</label>
            <input type="text" class="form-control" id="win" name="win"  value="{{ old('win') }}">
         </div>
         @error('win')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="lose">lose</label>
            <input type="number" class="form-control" id="lose" name="lose" value="{{ old('lose') }}">
         </div>
         @error('lose')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="players_count">players_count</label>
            <input type="text" disabled class="form-control" id="players_count" name="players_count"   value="{{ old('players_count') }}">
         </div>
         @error('players_count')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
</div>
@endsection