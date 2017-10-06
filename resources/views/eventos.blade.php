@extends('layouts.jfal')

@section('titulo', $titulo)

@section('content')
<table border='1'>
  <tr>
    <td>ID</td>
    <td>titulo</td>
    <td>Início</td>
    <td>Fim</td>
    <td>Evento</td>
    <td>Texto</td>
    <td>Certificado</td>
    <td>Vagas</td>
  </tr>
  @foreach ($eventos as $evento)
    <tr>
      <td>{{ $evento->id }}</td>
      <td>{{ $evento->titulo }}</td>
      <td>{{ $evento->dt_inicio_inscricao }}</td>
      <td>{{ $evento->dt_fim_inscricao }}</td>
      <td>{{ $evento->dt_evento }}</td>
      <td>{{ $evento->texto }}</td>
      <td>{{ $evento->certificado ? 'Sim' : 'Não' }}</td>
      <td>{{ $evento->vagas }}</td>
    </tr>
  @endforeach
</table>
@endsection