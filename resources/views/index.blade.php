@extends('layouts.default')

@section('title','トップページ')

@section('content')

@if (count($errors) > 0)
  <p>入力に問題があります</p>
@endif
  
<form action="/" method="POST">
  @csrf
  @if ($errors->has('name'))
    <tr>
      <th>ERROR</th>
      <td>
        {{$errors->first('name')}}
      </td>
    </tr>
  @endif
  <p>氏名</p>
    <input type="text" name="name"><br>
  
@if ($errors->has('email'))
  <tr>
    <th>ERROR</th>
    <td>
      {{$errors->first('email')}}
    </td>
  </tr>
@endif
  <p>メールアドレス</p>
    <input type="email" name="email"><br>
  <button>送信</button>
</form>
@endsection