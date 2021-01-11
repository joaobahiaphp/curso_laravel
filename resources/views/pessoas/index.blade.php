@extends('template.app')

@section('content')

<div>
    @foreach($pessoas as $pessoa)
    <div class="col-md-3">

        <div class="panel panel-info">
            <div class="panel-heading">Nome: {{ $pessoa->nome }}</div>
            @foreach($pessoa->telefone as $telefone)
                <div class="panel-body">
                    Telefone: ({{ $telefone->ddd }}){{ $telefone->fone }}
                </div>
            @endforeach
        </div>

    </div>
    @endforeach
</div>

@endsection