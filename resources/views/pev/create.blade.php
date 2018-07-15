@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{route('pevs.store')}}" method="POST">
            @csrf

            <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="">Nome da empresa*</label>
                        <input type="text" name="name" class="form-control" required/>

                    </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                        
            <label for="">CEP*</label>
            <input type="text" name="cep" class="form-control" required/>
                </div>
        </div>
        <div class="row">
                <div class="form-group col-sm-12">
                        
            <label for="">Endereço*</label>
            <input type="text" name="endereco" class="form-control" required/>
                </div>
        </div>
        <div class="row">
                <div class="form-group col-sm-12">
                        
            <label for="">Número*</label>
            <input type="text" class="form-control" name="numero" required/>
                </div>
        </div>
        {{-- <div class="row">
                <div class="form-group col-sm-12">
                        

            <label for="">Quais dias da semana pode ser captado o lixo?</label><br/>
            <input type="checkbox" name="dias[]" value="0"/> Domingo 
            <input type="checkbox" name="dias[]" value="1"/> Segunda feira
            <input type="checkbox" name="dias[]" value="2"/> Terça feira
            <input type="checkbox" name="dias[]" value="3"/> Quarta feira
            <input type="checkbox" name="dias[]" value="4"/> Quinta feira
            <input type="checkbox" name="dias[]" value="5"/> Sexta Feira
            <input type="checkbox" name="dias[]" value="6"/> Sábado
                </div>
        </div> --}}
        <div class="row">
                <div class="form-group col-sm-12">
                        
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="email" required/>
                </div>
        </div>
        <div class="row">
                <div class="form-group col-sm-12">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required/>
                        
                </div>
        </div>
        {{-- <div class="row">
                <div class="form-group col-sm-12">
                        <label for="">Tipo de resíduos</label><br/>
                        <input type="checkbox" name="tiposResiduos[]" value="0"/> Metal
                        <input type="checkbox" name="tiposResiduos[]" value="1"/> Plástico
                        <input type="checkbox" name="tiposResiduos[]" value="2"/> Papel
                        
                </div>
        </div> --}}






            <div class="row"><div class="form-group col-sm-12">
                    <label for="">Nome do responsável</label>
                    <input type="text" class="form-control" name="responsavel" placeholder="Com quem devemos falar?" required/>
                
            </div></div>

            <div class="row">
                <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Gravar</button>
                </div>
            </div>
        </form>
</div>
@endsection
