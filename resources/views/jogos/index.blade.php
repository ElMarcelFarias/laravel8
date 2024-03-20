@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
 <!-- Tudo aqui dentro vai ser renderizado lá no nosso template  -->
    <h1>Listagem de Jogos</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ano de Criação</th>
            <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogos as $jogo)
            <tr>
                <td>{{ $jogo->id }}</td>
                <td>{{ $jogo->nome }}</td>
                <td>{{ $jogo->categoria }}</td>
                <td>{{ $jogo->ano_criacao }}</td>
                <td>{{ $jogo->valor }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection