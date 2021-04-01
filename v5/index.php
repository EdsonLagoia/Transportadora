<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1' name='viewport'/>
        <link rel="stylesheet" href="publico/css/estilo.css">
        <script src="https://kit.fontawesome.com/7c132864b5.js" crossorigin="anonymous"></script>
        <title>Transporta Brasil</title>
    </head>
    <body>
        <header>
            <h1>Transporta Brasil</h1>
            <p>Levaremos a sua mercadoria até você independentemente do local e da dificuldade</p>
        </header>
        <input type="checkbox" id="btn_menu">
        <label for="btn_menu" id="icone_menu">&#9776</label>
        <div class="menu">
            <ul>
                <li><a href="#"><span class="fas fa-plus"></span>Cadastrar</a>
                    <ul>
                        <li><a href="?modulo=cliente&acao=adicionar"><span class="fas fa-id-card"></span>Cliente</a></li>
                        <li><a href="?modulo=funcionario&acao=adicionar"><span class="fas fa-id-badge"></span>Funcionário</a></li>
                        <li><a href="?modulo=mercadoria&acao=adicionar"><span class="fas fa-box-open"></span>Mercadoria</a></li>
                        <li><a href="?modulo=envio&acao=adicionar"><span class="fas fa-envelope"></span>Envio</a></li>
                        <li><a href="?modulo=statusenvio&acao=adicionar"><span class="fas fa-shipping-fast"></span>Status de Envio</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="fas fa-list"></span>Listar</a>
                    <ul>
                    <li><a href="?modulo=cliente&acao=listar"><span class="fas fa-id-card"></span>Cliente</a></li>
                    <li><a href="?modulo=funcionario&acao=listar"><span class="fas fa-id-badge"></span>Funcionário</a></li>
                    <li><a href="?modulo=mercadoria&acao=listar"><span class="fas fa-box-open"></span>Mercadoria</a></li>
                    <li><a href="?modulo=envio&acao=listar"><span class="fas fa-envelope"></span>Envio</a></li>
                    <li><a href="?modulo=statusenvio&acao=listar"><span class="fas fa-shipping-fast"></span>Status de Envio</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="far fa-edit"></span>Atualizar Dados</a>
                    <ul>
                        <li><a href="?modulo=cliente&acao=editar"><span class="fas fa-id-card"></span>Cliente</a></li>
                        <li><a href="?modulo=funcionario&acao=editar"><span class="fas fa-id-badge"></span>Funcionário</a></li>
                        <li><a href="?modulo=mercadoria&acao=editar"><span class="fas fa-box-open"></span>Mercadoria</a></li>
                        <li><a href="?modulo=envio&acao=editar"><span class="fas fa-envelope"></span>Envio</a></li>
                        <li><a href="?modulo=statusenvio&acao=editar"><span class="fas fa-shipping-fast"></span>Status de Envio</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="fas fa-trash-alt"></span>Excluir</a>
                    <ul>
                    <li><a href="?modulo=cliente&acao=excluir"><span class="fas fa-id-card"></span>Cliente</a></li>
                        <li><a href="?modulo=funcionario&acao=excluir"><span class="fas fa-id-badge"></span>Funcionário</a></li>
                        <li><a href="?modulo=mercadoria&acao=excluir"><span class="fas fa-box-open"></span>Mercadoria</a></li>
                        <li><a href="?modulo=envio&acao=excluir"><span class="fas fa-envelope"></span>Envio</a></li>
                        <li><a href="?modulo=statusenvio&acao=excluir"><span class="fas fa-shipping-fast"></span>Status de Envio</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class = "content">
            <?php
                $modulo = $_GET['modulo'];
                $acao = $_GET['acao'];
                require("modulos/" . $modulo . "/" . $acao . ".php");
            ?>
        </div>
        <footer>
        </footer>
    </body>
</html>