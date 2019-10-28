@extends('template.template')
@section('content')
Autenticado com sucesso! Seja bem-vindo {{ auth()->guard('costumer')->user()->name }}
<!-- {{ Auth::user('costumer') }} -->
<br>
<a href="/sair">Logout </a>
@endsection