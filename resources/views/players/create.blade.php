@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="container my-5">
      <h2 class="text-center">Create Players</h2>
     <form action="{{ route('players.store')}}" method="POST">
       @csrf
         <div class="form-group my-4">
                <label for="nickname">Nickname</label>
                <input type="text" class="form-control" id="nickname" name="nickname"  value="{{ old('nickname') }}">
        </div> 
         @error('nickname')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="score">score</label>
            <input type="number" class="form-control" id="score" name="score"  value="{{ old('score') }}">
         </div>
         @error('score')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="win">win</label>
            <input type="number" class="form-control" id="win" name="win" value="{{ old('win') }}">
         </div>
         @error('win')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <div class="form-group my-4">
            <label for="lose">lose</label>
            <input type="number"  class="form-control" id="lose" name="lose"   value="{{ old('lose') }}">
         </div>
         <div class="form-group my-4">
            <label for="rr">RR</label>
            <input type="number" class="form-control" id="rr" name="rr"  value="{{ old('rr') }}">
         </div>
         @error('rr')
         <div class="alert alert-danger">
            {{ $message }}
         </div>
         @enderror
         <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
</div>
@endsection