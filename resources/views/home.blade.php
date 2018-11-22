@extends('adminlte::page')

@section('title', 'WebEstágios')

@section('content_header')
    <h1>Bem-Vindo {!!  Auth::user()->name; !!}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dica!</h3>
                </div>
                <div class="box-body">
                    Não esqueça de manter seu perfil sempre atualizado! Ele garante encontrar novas oportunidades para seus interesses.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dica!</h3>
                </div>
                <div class="box-body">
                    Veja como se sair bem nas entrevistas de emprego! Confira em:
                    <a href="https://www.napratica.org.br/7-dicas-para-mostrar-o-seu-valor-na-entrevista-de-emprego/">7 dicas para mostrar seu valor na entrevista de emprego</a>
                </div>
            </div>
        </div>
    </div>

@stop