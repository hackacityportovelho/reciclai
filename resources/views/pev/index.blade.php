@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="form-group col-sm-12 text-right">
            <a href="{{route("pevs.create")}}" class="btn btn-link">Novo PEV</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pevs as $pev)
            <tr>
                <td>{{$pev->name}}</td>
            </tr>
            @empty
            <tr>
                <td>Sem resultados</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
