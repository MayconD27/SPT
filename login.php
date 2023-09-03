<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section>
        <div class="slide">
            <img src="img/background.jpg" alt="" class="background">
            <div class="pelicula"></div>
            <div class="texto">
                <h1>SPT</h1>
                <p>Sistema para pagamento de transporte</p>
        </div>
            
        </div>

        <div class="formulario">
            <h1>SPT</h1>
            <form action="logar.php" method="POST">
                <label for="email">E-mail: </label>
                <input type="email" name="email">
                <label for="senha">Senha: </label>
                <input type="password" name="senha">
                
                <button type="submit">Enviar <i class="bi bi-box-arrow-in-right"></i></button>
            </form>
        </div>
        
    </section>
</body>
</html>