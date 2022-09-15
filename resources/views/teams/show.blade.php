@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="container text-center mt-5">
        <table class="table table-responsive-md">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col">NAME CLAN</th>
              <th scope="col">Win</th>
              <th scope="col">LOSE</th>
              <th scope="col">PLAYERS_COUNT</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>{{ $teams->name_clan }}</td>
                <td>{{ $teams->win }}</td>
                <td>{{ $teams->lose }}</td>
                <td>{{ $teams->players_count }}</td>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
<div class="container text-center">
    <a href="{{ route('teams.index') }}" class="btn btn-primary">Back to the list</a>
</div>
@endsection