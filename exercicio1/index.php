<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Exercício 1 - PHP</h1>
        <form class="table-light" action="exercicio1" method="post">
            <div class="conteiner">
                <div class="form-floating mb-3" >
                    <input class="form-control"type="number" name= "value1" placeholder=" ">  
                    <label class="form-label" for="value1">Digite o primeiro valor:</label>
                </div>
            </div>
            <div class="conteiner">
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" name= "value2" placeholder=" ">
                    <label class="form-label" for="value2">Digite o segundo valor:</label>
                </div>
            </div>
            <input class="btn btn-outline-success" type="submit" value="Enviar">
        </form>
</body>
</html>