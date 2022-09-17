<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <?php
        abstract class Usuario
        {
            protected string $nome;
            protected string $email;
            protected string $login;
            protected string $senha;

            public function __construct(string $nome, string $email, string $login, string $senha)
            {
                $this->nome = $nome;
                $this->email = $email;
                $this->login = $login;
                $this->senha = $senha;
            }

            public function getNome(): string
            {
                return $this->nome;
            }

            public function getEmail(): string
            {
                return $this->email;
            }

            public function getLogin(): string
            {
                return $this->login;
            }

            public function getSenha(): string
            {
                return $this->senha;
            }

            abstract public function getTipo(): string;

            public function verLivros(array $livros)
            {
                /**
                 * N/A para este exercício.
                 */
            }
        }

        class UsuarioLeitor extends Usuario
        {
            public function __construct(string $nome, string $email, string $login, string $senha)
            {
                parent::__construct($nome, $email, $login, $senha);
            }

            public function getTipo(): string
            {
                return "Leitor";
            }
        }

        class UsuarioBibliotecario extends Usuario
        {
            public function __construct(string $nome, string $email, string $login, string $senha)
            {
                parent::__construct($nome, $email, $login, $senha);
            }

            public function getTipo(): string
            {
                return "Bibliotecário";
            }

            public function registrarEmprestimo(string $emailUsuarioLeitor, string $livroEmprestado, array &$emprestimos): void
            {
                $nomeUsuario = $this->getNome();

                echo "<script>alert('\"$nomeUsuario\" emprestou o livro \"$livroEmprestado\" para \"$emailUsuarioLeitor\"')</script>";
                
                $registroEmprestimo = "$emailUsuarioLeitor -> $livroEmprestado";
                
                array_push($emprestimos, $registroEmprestimo);
            }
        }

        class UsuarioAdmin extends Usuario
        {
            public function __construct(string $nome, string $email, string $login, string $senha)
            {
                parent::__construct($nome, $email, $login, $senha);
            }

            public function getTipo(): string
            {
                return "Administrador";
            }

            public function criarUsuario(Usuario $usuario, array &$usuarios): void
            {
                array_push($usuarios, $usuario);
            }
        }

        $usuarios = [];
        $emprestimos = [];

        /**
         * Cria usuários admins
         */
        $usuarioAdminTico = new UsuarioAdmin("Tico", "tico@ftec.com", "admin", "admin123");
        $usuarioAdminTeco = new UsuarioAdmin("Teco", "teco@ftec.com", "admin1", "admin123");

        array_push($usuarios, $usuarioAdminTico, $usuarioAdminTeco);

        /**
         * Após serem criados, os usuários admins criam os restantes dos usuários
         */
        $usuarioBibliotecarioBete = new UsuarioBibliotecario("Bete", "bete@ftec.com", "bib", "bib123");
        $usuarioBibliotecarioDavi = new UsuarioBibliotecario("Davi", "davi@ftec.com", "bib1", "bib456");
        $usuarioLeitorAntonio = new UsuarioLeitor("Antônio", "anv@ftec.com", "anv", "f@tek");

        $usuarioAdminTico->criarUsuario($usuarioBibliotecarioBete, $usuarios);
        $usuarioAdminTico->criarUsuario($usuarioBibliotecarioDavi, $usuarios);
        $usuarioAdminTeco->criarUsuario($usuarioLeitorAntonio, $usuarios);

        /**
         * Bete e Davi emprestam livros ao Antônio
         */
        $usuarioBibliotecarioBete->registrarEmprestimo($usuarioLeitorAntonio->getEmail(), "Livro 1, Autor X", $emprestimos);
        $usuarioBibliotecarioDavi->registrarEmprestimo($usuarioLeitorAntonio->getEmail(), "Livro 2, Autor Y", $emprestimos);

    ?>

    <table border="1">
        <tr>
            <th>Usuário</th>
            <th>Tipo</th>
            <th>e-mail</th>
            <th>login</th>
            <th>senha</th>
        </tr>
        <?php foreach ($usuarios as $u) { ?>
            <tr>
                <td><?php echo $u->getNome(); ?></td>
                <td><?php echo $u->getTipo(); ?></td>
                <td><?php echo $u->getEmail(); ?></td>
                <td><?php echo $u->getLogin(); ?></td>
                <td><?php echo $u->getSenha(); ?></td>
            </tr>
        <?php } ?>
    </table>

    <br>

    <table border="1">
        <tr>
            <th>Empréstimos</th>
        </tr>
        <?php foreach ($emprestimos as $e) { ?>
            <tr>
                <td><?php echo $e; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>