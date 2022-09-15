@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="container text-center mt-5">
        <table class="table table-responsive-md">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col">Nickname</th>
              <th scope="col">SCORE</th>
              <th scope="col">WIN</th>
              <th scope="col">LOSE</th>
              <th scope="col">RR</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>{{ $players->nickname }}</td>
                <td>{{ $players->score }}</td>
                <td>{{ $players->win }}</td>
                <td>{{ $players->lose }}</td>
                <td>{{ $players->rr }}</td>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
<div class="container text-center">
    <a href="{{ route('players.index') }}" class="btn btn-primary">Back to the list</a>
</div>
@endsection