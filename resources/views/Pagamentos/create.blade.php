<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">


    <title>Formulario</title>
    <style>
        label{
            float: left;
            display: block;
            width:90px;
        }
    </style>
</head>
<body>
    <div class="contains">
        <div class="formulario">
            <form method="post" action="{{ route('salvar_pagamento') }}">
                <div class="title-form">
                    <h2>Pagamentos</h2>
                </div>
                @csrf
                <div class="form-input">
                    <div class="mb-3">
                        <label for="pagamento" class="form-label">Pagador</label>
                        <input type="text" class="form-control"  name="pagamento" id="pagamento">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" name="descricao" rows="3" id="descricao"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" name="data" id="data">
                    </div>
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="number" class="form-control" name="valor" id="valor">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                </div>
            
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>