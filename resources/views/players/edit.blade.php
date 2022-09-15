@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('players.update', $players)}}" method="POST">
    @csrf
    @method('PUT')
       <div class="form-group my-4">
          <label for="nickname">Nickname</label>
          <input type="text" class="form-control" id="nickname" name="nickname" value="{{$players->nickname}}">
       </div>
        @error('nickname')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
       <div class="form-group my-4">
          <label for="score">score</label>
          <input type="text" class="form-control" id="score" name="score"  value="{{ $players->score }}">
       </div>
       @error('score')
            <div class="alert alert-danger">
                   {{ $message }}
             </div>
        @enderror
       <div class="form-group my-4">
          <label for="win">win</label>
          <input type="number" class="form-control" id="win" name="win" value="{{ $players->win }}">
       </div>
       @error('win')
             <div class="alert alert-danger">
                   {{ $message }}
            </div>
        @enderror
       <div class="form-group my-4">
          <label for="lose">lose</label>
          <input type="text"  class="form-control" id="lose" name="lose"   value="{{ $players->lose }}">
       </div>
       @error('lose')
            <div class="alert alert-danger">
              {{ $message }}
             </div>
        @enderror
        <div class="form-group my-4">
            <label for="rr">rr</label>
            <input type="text"  class="form-control" id="rr" name="rr"   value="{{ $players->rr }}">
         </div>
         @error('lose')
              <div class="alert alert-danger">
                {{ $message }}
               </div>
          @enderror
       <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection