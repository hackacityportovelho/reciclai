@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{route('pevs.store')}}" method="POST">
            @csrf

            <label for="">Nome da empresa</label>
            <input type="text" name="name" class="form-control"/>

            <label for="">CEP</label>
            <input type="text" name="cep" class="form-control"/>

            <label for="">Endereço</label>
            <input type="text" name="endereco" class="form-control"/>

            <label for="">Número</label>
            <input type="text" class="form-control" name="numero"/>

            <label for="">Quais dias da semana pode ser captado o lixo?</label><br/>
            <input type="checkbox" name="dias[]" value="0"/> Domingo 
            <input type="checkbox" name="dias[]" value="1"/> Segunda feira
            <input type="checkbox" name="dias[]" value="2"/> Terça feira
            <input type="checkbox" name="dias[]" value="3"/> Quarta feira
            <input type="checkbox" name="dias[]" value="4"/> Quinta feira
            <input type="checkbox" name="dias[]" value="5"/> Sexta Feira
            <input type="checkbox" name="dias[]" value="6"/> Sábado

            <label for="">E-mail</label>
            <input type="email" class="form-control" name="email"/>

            <label for="">Telefone</label>
            <input type="text" class="form-control" name="telefone"/>

            <label for="">Tipo de resíduos</label><br/>
            <input type="checkbox" name="tiposResiduos[]" value="Metal"/> Metal
            <input type="checkbox" name="tiposResiduos[]" value="Plástico"/> Plástico
            <input type="checkbox" name="tiposResiduos[]" value="Papel"/> Papel

            <div class="row"><div class="form-group col-sm-12">
                    <label for="">Nome do responsável</label>
                    <input type="text" class="form-control" placeholder="Com quem devemos falar?"/>
                
            </div></div>

            <div class="row">
                <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Gravar</button>
                </div>
            </div>
        </form>
</div>
@endsection
