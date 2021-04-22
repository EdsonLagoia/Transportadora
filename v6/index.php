<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta content='width=device-width, initial-scale=1' name='viewport'/>
        <link rel="stylesheet" href="publico/css/stilo.css"/>
        <script src="https://kit.fontawesome.com/7c132864b5.js" crossorigin="anonymous"></script>
        <title>Transporta Brasil</title>
    </head>
    <body>
        <header>
            <h1>Transporta Brasil</h1>
            <p>Levaremos a sua mercadoria até você independentemente do local e da dificuldade</p>
        </header>
        <input type="checkbox" id="btn_menu"/>
        <label for="btn_menu" id="icone_menu">&#9776</label>
        <div class="menu">
            <ul>
                <li><a href="#"><span class="far fa-address-card"></span>Remetente</a>
                    <ul>
                        <li><a href="?modulo=remetente&acao=adicionar"><span class="fas fa-plus"></span>Cadastrar</a></li>
                        <li><a href="?modulo=remetente&acao=listar"><span class="fas fa-list"></span>Listar</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="fas fa-box-open"></span>Mercadoria</a>
                    <ul>
                        <li><a href="?modulo=mercadoria&acao=adicionar"><span class="fas fa-plus"></span>Cadastrar</a></li>
                        <li><a href="?modulo=mercadoria&acao=listar"><span class="fas fa-list"></span>Listar</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="fas fa-address-card"></span>Destinatário</a>
                    <ul>
                        <li><a href="?modulo=destinatario&acao=adicionar"><span class="fas fa-plus"></span>Cadastrar</a></li>
                        <li><a href="?modulo=destinatario&acao=listar"><span class="fas fa-list"></span>Listar</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="fas fa-envelope"></span>Envio</a>
                    <ul>
                        <li><a href="?modulo=envio&acao=adicionar"><span class="fas fa-plus"></span>Cadastrar</a></li>
                        <li><a href="?modulo=envio&acao=listar"><span class="fas fa-list"></span>Listar</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="fas fa-shipping-fast"></span>Entrega</a>
                    <ul>
                        <li><a href="?modulo=entrega&acao=adicionar"><span class="fas fa-plus"></span>Cadastrar</a></li>
                        <li><a href="?modulo=entrega&acao=listar"><span class="fas fa-list"></span>Listar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class = "content">
            <?php
                if(isset($_GET["modulo"])){ $modulo = $_GET["modulo"];} else { $modulo = "remetente";}
                if(isset($_GET["acao"])){ $acao= $_GET["acao"];} else { $acao= "adicionar";}
                
                if($modulo){
                    if(file_exists("modulos/".$modulo."/".$acao.".php")){ 
                        include("modulos/".$modulo."/".$acao.".php");	
                    }else{
                        echo "A pagina nao existe";
                    }
                }   
            ?>
        </div>
        <footer>
        </footer>
    </body>
</html>