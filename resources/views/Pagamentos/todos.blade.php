<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    <title>fornecedores</title>
</head>
<body>

    <div class="contains">
        <div class="formulario">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pagamentos</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagamentos as $pagamento)
                        <tr>
                            <th scope="row">{{$pagamento->id}}</th>
                            <td>{{$pagamento->pagamento}}</td>
                            <td>{{$pagamento->descricao}}</td>
                            <td>{{$pagamento->data}}</td>
                            <td>{{$pagamento->valor}}</td>
                            <td>
                                <a class="link-a btn btn-primary mb-3" href="{{ route('editar_pagamento', ['id'=>$pagamento->id])}}" title="Editar pagamento {{ $pagamento->nome}}" >Editar</a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>