<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Ano de Nascimento</title>
  </head>
  <body> <center>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Descubra quantos Anos/Meses/Dias que você tem!</h5>
    <form class="form-signin" action="anoNascimento.php" method="post">
    <div class="form-group"  >
        <label for="text">Qual seu nome ?</label>
        <input type="text" class="form-control" name="nome" aria-describedby="text" placeholder="Seu nome">
        <small id="nomeHelp" class="form-text text-muted">Nunca vamos compartilhar seu nome com ninguém.</small>
    </div>
    <div class="form-group"  >
        <label for="text">Digite o Dia do seu aniverssário</label>
        <input type="number" class="form-control" name="dia" aria-describedby="numeric" placeholder="Dia">
    </div>
    <div class="form-group"  >
        <label for="text">Digite o Mes do seu aniverssário</label>
        <input type="number" class="form-control" name="mes" aria-describedby="numeric" placeholder="Mes">
    </div>
    <div class="form-group"  >
        <label for="text">Digite o Ano do seu aniverssário</label>
        <input type="number" class="form-control" name="ano" aria-describedby="numeric" placeholder="Ano">
    </div>
    <button type="submit" class="btn btn-primary">Continuar</button>
    </form>
  </div>
</div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </center></body>
</html>