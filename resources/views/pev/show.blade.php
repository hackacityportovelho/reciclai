@extends('layouts.app')
@section('heads')
<style>
    label{
        display: block !important;
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<div class="container">
   <h2>Informações sobre o PEV</h2>
    
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="">Nome da empresa</label>
            {{$item->name}}
        </div>
        <div class="form-group col-sm-3">

                <label for="">E-mail</label>
                {{$item->email}}


        </div>
        <div class="form-group col-sm-3">

                <label for="">Telefone</label>
                {{$item->telefone}}
        </div>
        <div class="form-group col-sm-3">

                <label for="">Responsavel</label>
                {{$item->responsavel}}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
                <label for="">Endereço</label>
                {{$item->endereco}}
        </div>
    </div>
</div>
@endsection
