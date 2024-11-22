<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Login - Gerenciador de Propostas</title>

    <!-- CSS Interno -->
    <style>
        /* Estilos gerais */
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        /* Caixa de login */
        .caixa {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
        }

        /* Título do login */
        .caixa h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #007bff;
            text-align: center;
        }

        /* Estilos para os inputs e o botão de login */
        .form-control, .btn {
            border-radius: 8px;
            padding: 12px;
        }

        /* Botão de Login */
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #00c6ff);
            border: none;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4);
        }

        /* Alerta de erro */
        .alert {
            font-size: 1rem;
            text-align: center;
            margin-top: 20px;
        }

        /* Efeitos de transição */
        button {
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        button:hover {
            transform: scale(1.05);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .caixa {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="caixa">
        <!-- Login Form -->
        <form method="post" action="login.php">
            <h3>Gerenciador de Propostas</h3>

            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" name="usu_login" placeholder="Digite seu login" required>
            </div>
            <br>

            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="usu_senha" placeholder="Digite sua senha" required>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <!-- Fim do formulário de login -->

        <!-- Exibição do erro -->
        <?php
            if (isset($_GET['erroLogin'])) {
                echo '
                    <div id="erroLogin" class="alert alert-danger" role="alert">
                        Erro! Tente novamente.
                    </div>
                ';
            }
        ?>
    </div>

</body>

</html>
