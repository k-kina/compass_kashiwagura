@extends('layouts.sidebar')

@section('content')
<div class="vh-100 d-flex" style="align-items:center; justify-content:center;">
  <div class="w-50 h-75">
    <p><span>{{$date}}日</span><span class="ml-3">{{$part}}部</span></p>

      <table class="calendar-detail">
        <tr class="text-center" style="background-color: #03AAD2; color: #FFF;">
          <th class="w-40">ID</th>
          <th class="w-40">名前</th>
          <th class="w-40">予約場所</th>
        </tr>
        @foreach($reservePersons as $reservePerson)
        @foreach($reservePerson->users as $person)
        <tr class="text-center">
          <td class="w-25">{{ $person->id }}</td>
          <td class="w-25"><span>{{ $person->over_name }}</span>
            <span>{{ $person->under_name }}</span></td>
          <td class="w-25">リモート</td>
        </tr>
        @endforeach
        @endforeach
      </table>
  </div>
</div>
@endsection
