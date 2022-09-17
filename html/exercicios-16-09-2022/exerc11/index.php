<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Exercício 11</title>
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <div class="col d-flex justify-content-center mt-4">
        <div class="card" style="width: 400px">
          <div class="card-body">
            <h4 class="mb-4">CADASTRO</h4>
            <form action="./tratar.php" method="post">
              <div class="form-outline mb-4">
                <input
                  class="form-control mb-3"
                  placeholder="Nome"
                  type="text"
                  name="nome"
                />
                <!-- O INPUT SÓ É DO TIPO TEXT PARA PERMITIR A INSERÇÃO
                DE E-MAILS INVÁLIDOS -->
                <input
                  class="form-control mb-3"
                  placeholder="Email"
                  type="text"
                  name="email"
                />
                <input
                  class="form-control mb-3"
                  placeholder="Login"
                  type="text"
                  name="login"
                />
                <input
                  class="form-control"
                  placeholder="Senha"
                  type="password"
                  name="senha"
                />
              </div>
              <button class="btn btn-primary w-100">Cadastrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="./assets/bootstrap.bundle.min.js"></script>
  </body>
</html>
