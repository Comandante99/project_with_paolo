@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('teams.update', $teams)}}" method="POST">
    @csrf
    @method('PUT')
       <div class="form-group my-4">
          <label for="name_clan">name_clan</label>
          <input type="text" class="form-control" id="name_clan" name="name_clan"  value="{{ $teams->name_clan }}">
       </div>
        @error('name_clan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
       <div class="form-group my-4">
          <label for="win">win</label>
          <input type="number" class="form-control" id="win" name="win"  value="{{ $teams->win }}">
       </div>
       @error('win')
            <div class="alert alert-danger">
                   {{ $message }}
             </div>
        @enderror
       <div class="form-group my-4">
          <label for="lose">lose</label>
          <input type="number" class="form-control" id="lose" name="lose" value="{{ $teams->lose }}">
       </div>
       @error('lose')
             <div class="alert alert-danger">
                   {{ $message }}
            </div>
        @enderror
       <div class="form-group my-4">
          <label for="players_count">players_count</label>
          <input type="number"  class="form-control" id="players_count" name="players_count"   value="{{ $teams->players_count }}">
       </div>
       @error('players_count')
            <div class="alert alert-danger">
              {{ $message }}
             </div>
        @enderror
       <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection