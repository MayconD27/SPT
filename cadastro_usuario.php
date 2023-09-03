<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/card_user.css">
</head>
<body>
    <h1>Cadastro de usuário</h1>
    <form action="" method="post">
         <label for="nome">
            nome
         </label>   
        <input type="text" name="nome">
        <label for="cpf">
            cpf(apenas número)
        </label>
        <input type="text"name = "cpf" placeholder = "00000000000">
        <label for="email">
            email
        </label>
        <input type="email"name = "email">
        <label for="telefone">
            telefone(apenas número)
        </label>
        <input type="text" name = "telefone">
        <label for="qtd_dias">
            quantidade de dias
        </label>
        <input type="number" name = "qtd_dias">
        <button type="submit">
            cadastrar
        </button>
    </form>
    
</body>
</html>