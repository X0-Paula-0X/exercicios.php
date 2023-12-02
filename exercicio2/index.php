<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <meta http-equiv= "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio2/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@55.2.2/dist/js/bootstrap.bundle.min.js" defer></script>
  </head>
    <title> Exercício 2</title>
</head>
<body>
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm"> 
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand d-flex align-items-center">
                <i class="bi bi-card-checklist fs-1 me-2"></i>
            LISTA DE EXERCÍCIOS</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-auto">
                    <a href="https://github.com/X0-Paula-0X" class="nav-link" target="_blank">Github</a>
                    <a href="https://www.linkedin.com/in/paula-rayanne-898a63218/" class="nav-link" target="_blank">Linkedin</a>
                    <a href="https://www.youtube.com/@novostitans-programadores1824" class="nav-link" target="_blank">Novos Titãs</a>
                    <a href="http://caminhosparaofuturo.org/" class="nav-link" target="_blank">Associação caminhos para o futuro</a>
                </div>
            </div>
            
        </div>
    </nav>
    <h1>Exercício 2</h1>
    <form class="table-light" action = "/exercicio2/index.php " method = "POST">
    <br>
    <p>Digite com um número e o algoritimo informará se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes. </p> 
    <div class="conteiner">
        <div class="form-floating mb-3" >
            <input class="form-control" type = "number" name = "value">
            <label class="form-label" for = "value"> Digite um valor: </label>
        </div>
    </div>
    <input class="btn btn-outline-success" type = "submit" name = "enviar" value= "Enviar"/>
    </form>
</body>
</html>