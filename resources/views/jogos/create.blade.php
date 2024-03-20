@extends('layouts.app')

@section('title', 'Criar jogos')

@section('content')
 <!-- Tudo aqui dentro vai ser renderizado lá no nosso template  -->
    <div class="container mt-5">
        <h1>Crie um novo jogo</h1>
        <hr>
        <form action="{{ route('jogos-store') }}" method="POST">
            @csrf <!-- Seguranca da aplicacao -->
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome...">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria: </label>
                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Digite uma categoria para o jogo...">
                </div>
                <div class="form-group">
                    <label for="ano_criacao">Ano de Criação: </label>
                    <input type="number" class="form-control" name="ano_criacao" id="ano_criacao" placeholder="Digite o ano de criação...">
                </div>
                <div class="form-group">
                    <label for="valor">Valor: </label>
                    <input type="number" class="form-control" name="valor" id="valor" placeholder="Digite um valor para o jogo...">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection