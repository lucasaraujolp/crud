<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>CRUD's</title>
</head>
<body>
    <div class="contains">
        <div class="center">
            <h1>CRUD's</h1>

            <div class="container-wrapper">
                <div class="container-btn">
                    <h2>Recebimentos</h2>
                    <div class="link-dts">
                        <a class="link-a btn btn-primary mb-3" href="/clientes/novo">Cadastrar Recebimento</a>
                        <br>
                        <a class="link-a btn btn-primary mb-3" href="/clientes/ver">Visualizar tabela de Recebimentos</a>
                        <br>
                        <a class="link-a btn btn-primary mb-3" href="/clientes/saldo">Visualizar Saldo Total</a>
                    </div>
                </div>

                <div class="container-btn">
                    <h2>Pagamentos</h2>
                    <div class="link-dts">
                        <a class="link-a btn btn-primary mb-3" href="/pagamentos/novo">Cadastrar Pagamento</a>
                        <br>
                        <a class="link-a btn btn-primary mb-3" href="/pagamentos/ver">Visualizar tabela de Pagamentos</a>
                        <br>
                        <a class="link-a btn btn-primary mb-3" href="/pagamentos/saldo">Visualizar Saldo Total</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>