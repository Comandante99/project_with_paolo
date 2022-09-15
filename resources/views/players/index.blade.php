@extends('layouts.app')

@section('content')
<div class="container">
  @if ($message = session('success'))
     <div class="alert alert-success">
         {{ $message }}
     </div>
  @elseif ($message = session('danger'))
     <div class="alert alert-danger">
         {{ $message }}
     </div>
  @elseif ($message = session('primary'))
     <div class="alert alert-primary">
         {{ $message }}
     </div>
  @endif
</div>

<div class="container">
    <a type="button" href="{{ route('players.create') }}"class="btn btn-success">Create a New Players</a>
  </div>
  <div class="container text-center mt-5">
      <table class="table table-responsive">
        <thead class="bg-primary text-white">
          <tr>
            <th scope="col">nickname</th>
            <th scope="col">score</th>
            <th scope="col">win</th>
            <th scope="col">lose</th>
            <th scope="col">rr</th>
            <th scope="col" colspan="4">actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           @foreach ($list as $player)
              <td>{{ $player->nickname }}</td>
              <td>{{ $player->score }}</td>
              <td>{{ $player->win }}</td>
              <td>{{ $player->lose }}</td>
              <td>{{ $player->rr }}</td>
              <td><a href="{{ route('players.show', $player) }}" class="btn btn-outline-primary"> 
                  <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Show</span></a></td>
              <td>
              <td><a href="{{ route('players.edit', $player) }}" class="btn btn-outline-warning"> 
                  <i id="icons" class="fa fa-check-square-o" aria-hidden="true"></i><span>Edit</span></a></td>
              <td>
                <form action="{{ route('players.destroy', $player) }}" method="post" >
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger">
                     <i class="fa fa-trash-o" aria-hidden="true"></i>
                     <span>Delete</span>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection