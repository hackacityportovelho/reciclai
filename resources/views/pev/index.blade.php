@extends('layouts.app')

@section('content')
<div class="container">
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
