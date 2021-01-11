@extends('template.app')

@section('content')
    <div class='col-md-12'>
        <h3>Novo Contato</h3>
    </div>
    <div class='col-md-6 well'>
        {{ csrf_field() }}
        <form action="{{ url('/pessoas/store') }}" method="POST" class='col-md-12'>
            <div class="from-group col-md-12">
                <label for="none" class="control-label"></label>
                    <input type='text' class='col-md-12 form-control' name='nome' placeholder='nome'>
            </div>
        </form>
    </div>
    <button style="margin-top:5px;" class="btn btn-primary">Salvar</button>
@endsection