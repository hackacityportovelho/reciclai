@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @if(Auth::User()->email === "ga.richardi@gmail.com")
                        <div class="col-sm-6">
                            <a href="{{route('pevs.index')}}" class="btn btn-primary btn-block">
                                
                                
                                PEV</a>
                        </div>
                        @endif
                        <div class="col-sm-6">
                                <a href="{{route('pevs.map')}}" class="btn btn-primary btn-block">                                   
                                    
                                    Encontre seu ponto de entrega</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
