<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meu site pessoal 2.0(beta)</title>
    <link rel="icon" a  href="Imagens/ferramenta-de-controle-de-jogo.png" a>
    <link href="estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <section class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
              <div class="collapse navbar-collapse" id="navbarNav">
  
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="familia.html">Família</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="jogos.html">Jogos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="serie.html">Series</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="recados-form.html">Comentar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="recados.php">Recados</a>
                    </li>
                  </ul> 
              </div>
          </div>            
      </section>
   </nav>     
   <main>   
        <?php

        // Capturando os dados enviados através do formulário
        $nome = $_POST['txtnome'];
        $turma = $_POST['optturma'];
        $recado = $_POST['txtrecado'];

        // Criando a linha SQL para gravar no banco de dados
        $sql = "INSERT INTO comentarios (nome, turma, recado, ativo) 
              VALUES ('$nome', '$turma', '$recado', 'N')";

        // Fazendo a conexão com o banco de dados e executando a linha SQL
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=site_pessoal2.0', 'root', '');
        $conexao->exec($sql);

        echo "<h3>Recado enviado com sucesso!</h3><br>";

        ?>
       <h3>Recado enviado com sucesso!</h3>
     </main>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>