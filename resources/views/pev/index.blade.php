@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="form-group col-sm-12 text-right">
            <a href="{{route("pevs.create")}}" class="btn btn-link"><i class="fas fa-plus-circle"></i> Novo PEV</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="col-md-11">Nome</th>
                <th class="col-md-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($pevs as $pev)
            <tr>
                <td>{{$pev->name}}</td>
                <td><a href="{{route('pevs.show', ['id' => $pev->id])}}" class="btn btn-primary"><i class="fas fa-eye"></i> Visualizar</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="2">Sem resultados</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
