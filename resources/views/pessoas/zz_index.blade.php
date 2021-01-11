<html>
    <head>
        <title></title>
    </head>
    <body>
        <br /><br />
        @foreach($pessoas as $pessoa)
            Nome: {{ $pessoa->nome }}<br />
            Telefone:
            @foreach($pessoa->telefone as $telefone)
                {{ $telefone->fone }}
            @endforeach
            <br />
        @endforeach
    </body>
</html>