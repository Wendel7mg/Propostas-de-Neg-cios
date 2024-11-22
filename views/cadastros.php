<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Cadastro de Proposta</title>

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

        /* Botão de Cadastrar Proposta */
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

        /* Estilos de tabela */
        .table thead {
            background-color: #343a40;
            color: #ffffff;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
            padding: 15px;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f1f3f5;
        }

        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }

        .table td {
            word-wrap: break-word;
        }

        /* Botões de ação */
        .btn-outline-success, .btn-outline-danger {
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
            padding: 10px 12px;
        }

        .btn-outline-success:hover, .btn-outline-danger:hover {
            background-color: #28a745;
            transform: scale(1.1);
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
        }

        /* Estilos para ícones */
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

        /* Adicionar efeitos ao cabeçalho da tabela */
        .table th {
            background-color: #343a40;
            color: #fff;
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
<div class="caixa shadow-lg p-4 mb-4 bg-white rounded">
    <h4 class="text-primary mb-4">Cadastro de Proposta</h4>
    
    <!-- Botão de Cadastro -->
    <a type="button" class="btn btn-lg btn-gradient-primary text-white shadow-sm" href="?pagina=novoCadastro">
        <i class="bi bi-plus-circle"></i> Cadastrar Proposta
    </a>

    <br><br><br>

    <!-- Tabela de Propostas -->
    <div class="table-responsive">
        <table id="table_id" class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Proposta</th>
                    <th>Cliente</th>
                    <th>Valor</th>
                    <th>Status da Proposta</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr>';
                    echo '<td style="word-wrap: break-word">' . $linha['proposta'] . '</td>';
                    echo '<td style="word-wrap: break-word">' . $linha['cliente'] . '</td>';
                    echo '<td style="word-wrap: break-word">' . $linha['valor'] . '</td>';

                    // Verifica o status e exibe corretamente
                    $status = '';
                    if ($linha['status_disponibilidade'] == 'Aprovado') {
                        $status = 'Aprovado';
                    } elseif ($linha['status_disponibilidade'] == 'Reprovado') {
                        $status = 'Reprovado';
                    } else {
                        $status = 'Pendente';
                    }
                    echo '<td class="text-center">' . $status . '</td>';

                    echo '<td class="text-center">
                            <div class="d-flex justify-content-center">
                                <form method="post" action="?pagina=editaCadastro" class="me-2">
                                    <input type="hidden" name="id" value="' . $linha['id'] . '">
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </form>

                                <form method="post" action="deletaCadastro.php">
                                    <input type="hidden" name="id" value="' . $linha['id'] . '">
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
