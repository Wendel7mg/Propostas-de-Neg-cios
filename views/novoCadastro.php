<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Novo Cadastro de Proposta</title>

    <!-- CSS Interno -->
    <style>
        /* Estilos gerais */
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        /* Caixa de cadastro */
        .caixa {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        /* Título */
        .caixa h4 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #007bff;
        }

        /* Botão de Voltar */
        .btn-gradient-primary {
            background: linear-gradient(45deg, #007bff, #00c6ff);
            border: none;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-gradient-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4);
        }

        /* Estilos para os inputs e o botão de submit */
        .form-control, .btn {
            border-radius: 8px;
            padding: 10px;
        }

        /* Botão de Cadastro */
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #00c6ff);
            border: none;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4);
        }

        /* Estilos para os ícones */
        .bi {
            font-size: 1.3rem;
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
                padding: 15px;
            }

            .btn-gradient-primary {
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>

    <br>
    <div class="caixa">
        <h4>Novo Cadastro de Proposta</h4>
        <br>
        <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
        <br><br><br>
        <form method="post" action="insereCadastro.php" autocomplete="off">
            <div class="mb-3">
                <label for="proposta" class="form-label">Nome da Proposta</label>
                <input type="text" class="form-control" id="proposta" name="proposta" required>
            </div>

            <div class="mb-3">
                <label for="cliente" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" required>
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" required>
            </div>

            <div class="mb-3">
                <label for="status_disponibilidade" class="form-label">Status da Proposta</label>
                <select class="form-control" id="status_disponibilidade" name="status_disponibilidade" required>
                    <option value="disponível">Aprovado</option>
                    <option value="indisponível">Reprovado</option>
                    <option value="pendente">Pendente</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <br><br>

</body>

</html>
