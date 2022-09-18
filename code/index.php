<!DOCTYPE html>
<html lang="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->

    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1 class="text-center">Lista de Contatos</h1>
    <div class="contatos">
        <h2>Todos</h2>
        
        <ul>
            <li>
                <table class="table">
                    <!--
                    <tr>
                        <th><div >Foto</div></th>
                        <th>Nome</th>
                        <th>Número</th>
                    </tr>
                    <tr>
                        <td><img class="foto-contato" src="./avatar_user.png" alt="Foto de Contato"></td>
                        <td>Pai</td>
                        <td>47 9999 8888</td>
                    </tr>
                    <tr>
                        <td><img class="foto-contato" src="./avatar_user.png" alt="Foto de Contato"></td>
                        <td>Mãe</td>
                        <td>47 9999 8887</td>
                    </tr>
                    <tr>
                        <td><img class="foto-contato" src="./avatar_user.png" alt="Foto de Contato"></td>
                        <td>Irmão</td>
                        <td>47 9999 8886</td>
                    </tr>
                    -->
                </table>
            </li>
        </ul>
        <h2>Favoritos</h2>
        <ul>
            <li>
                <table class="table">
                    <!--Por algum motivo o espaçamento na segunda tabela é diferente-->
                    <tr>
                        <th><div >Foto</div></th>
                        <th>Nome</th>
                        <th>Número</th>
                    </tr>
                    <tr>
                        <td><img class="foto-contato" src="./avatar_user.png" alt="Foto de Contato"></td>
                        <td>Irmão</td>
                        <td>47 9999 8886</td>
                    </tr>
                    <tr>
                        <td><img class="foto-contato" src="./avatar_user.png" alt="Foto de Contato"></td>
                        <td>Contato Aleatório</td>
                        <td>47 9999 8886</td>
                    </tr>
                </table>
            </li>
        </ul>
    </div>    
    <div>
        <h2>Novo Contato</h2>
        <p>Você pode cadastrar um novo contato clicando <a href="./pag2.html">aqui</a></p>
    </div>
</body>
</html>