<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php

    $nomeEntidade = ($_POST ["associacao_entidade"]);
    $nomeRepresentante = ($_POST ["representante"]);
    $docCPF = ($_POST ["doc_cpf"]);
    $telefone = ($_POST ["tel"]);
    $email = ($_POST ["email"]);
    $descricao = ($_POST ["obs"]);

    $doc = md5($docCPF);

    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/projetos/formulario-de-cadastro/assets/favicon/favicon.ico" type="image/x-icon">

    <!-- Reset CSS -->
    <link rel="stylesheet" href="/projetos/formulario-de-cadastro/assets/css/reset.css">    

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS Interno-->
    <link rel="stylesheet" href="/projetos/formulario-de-cadastro/assets/css/global.css">
    <link rel="stylesheet" href="/projetos/formulario-de-cadastro/assets/css/custom.css">
    <link rel="stylesheet" href="/projetos/formulario-de-cadastro/assets/css/styles.css">

</head>

<body>
    <div class="container">
        <div>
            <div>
                <table class="table table-responsive-md table-responsive-sm table-striped table-hover table-bordered border-dark mt-4">
                    <thead class="table-success">
                        <tr class="table-bordered border-dark  text-center">
                            <th scope="col">ID</th>
                            <th scope="col">ASSOCIAÇÃO</th>
                            <th scope="col">REPRESENTANTE</th>
                            <th scope="col">CPF</th>
                            <th scope="col">TELEFONE</th>
                            <th scope="col">E-MAIL</th>
                            <th scope="col">DESCRIÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <?php echo '<td>'.$nomeEntidade.'</td>'?>
                            <?php echo '<td>'.$nomeRepresentante.'</td>'?>
                            <?php echo '<td>'.$doc.'</td>'?>
                            <?php echo '<td>'.$telefone.'</td>'?>
                            <?php echo '<td>'.$email.'</td>'?>
                            <?php echo '<td>'.$descricao.'</td>'?>
                
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>