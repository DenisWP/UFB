<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>U F B</title>
    
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

     <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">  
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>

<body id="pageBody">
<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
                  <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="index.html" id="divSiteTitle">U F B</a><br />
                        <a href="index.html" id="divTagLine">Universidade Federal do Bação</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="dropdown">
                            <a href="cursos.php" class="dropdown-toggle"> Cursos <b class="caret"></b></a>
                            <ul class="dropdown-menu">

                            <li><a href="adm.php">Administração</a></li>
                            <li><a href="edufis.php">Educação Física</a></li>
                            <li><a href="engcomp.php">Eng. de Computação</a></li>
                            <li><a href="engcont.php">Eng. de Controle e Automação</a></li>
                            <li><a href="engprod.php">Eng. de Produção</a></li>
                            <li><a href="engmin.php">Eng. de Minas</a></li>
                            <li><a href="engmec.php">Eng. Mecânica</a></li>
                            <li><a href="engseg.php">Eng. de Segurança do Trabalho</a></li>
                            <li><a href="engciv.php">Eng. Civíl</a></li>
                            <li><a href="pedag.php">Pedagogia</a></li>
                            <li><a href="medvet.php">Medicina Veterinária</a></li>
                            
                                                                                
                            <li class="dropdown"></a>
                            <ul class="dropdown-menu sub-menu">
                            </ul>
                            </li>
                            </ul>
                            </li>
                            <li><a href="inscricao.php">Vestibular</a></li>
                            
                            <li><a href="administrator.php">Acesso Restrito</a></li>
                            </ul>
                            </div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Engenharia Mecânica</span>
            </div>

            <div class="row-fluid">
            <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">

                    <h1><b>Engenharia Mecânica</b></h1>
                    <hr>
					
                   
                   <!-- Aqui irei inserir os dados que serão carregados do banco de dados--> 
                   
                    <?php require_once('conexao.php'); ?>
    
                    <?php
                        
                        $sql = "SELECT * FROM cursos WHERE codigo = 'ENGMEC'";
                        $query = $mysqli -> query($sql);

                        $rows = mysqli_num_rows($query);
                        
                        while ($dados = mysqli_fetch_array($query)) {
                           
                                echo "<b>Curso:</b> ".$dados['nomedocurso']. "<br>";
                                echo "<b>Duração:</b> " .$dados['duracao']. "<br>";
                                echo "<b>Turno:</b> " .$dados['turno']. "<br>";
                                echo "<b>Mensalidade:</b> " .$dados['mensalidades']. "<br><br>";
                                echo "<b>Descritivo:</b> " .$dados['descritivo']. "<br><br>";

                                $imagem_arry=explode(";", $dados["imagem1"]);
                                //for para exibição das imagens !
                                for ($i = 0; $i <= sizeof($imagem_arry)-1; $i++) {
                                    echo "<div class='span5'> "  ;              
                                    echo "<div class='box'> ";
                                        echo "<img src='upload/".$imagem_arry[$i]."'/><br/>";
                                    echo '</div>';               
                                    echo '</div>';
                                }

                        }

                ?>

       
              
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>


<!-- Configuração do Rodapé --> 
<divid="footerOuterSeparator"></div>
    <div id="divFooter" class="footerArea">
        <div class="divPanel">

            <div class="row-fluid">
                
                <div class="span3" id="footerArea1">                
                    <h3>Processo Seletivo</h3>
                    <p>Inscreva-se para o primeiro processo seletivo 1° 2016. Não perca tempo !</p>                    
                    <p>
                        <a href="inscricao.php" title="Inscrições Abertas">Clique Aqui</a><br /> <!--referenciar a pagina do formulario-->                
                    </p>
                </div>

                <div class="span3" id="footerArea2">
                    <h3>Missão</h3> 
                    <p>
                    "Formar profissionais socialmente responsáveis, capazes de estender á comunidade em que vivem os conhecimentos das ciências, contribuindo para o desenvolvimento social e cultural da região, do Estado e do Pais."
                    </p>
                </div>
                
                <div class="span3" id="footerArea3">
                    <h3>Visão</h3> 
                    <p>
                    "Ser uma instituição de ensino superior de referência na região e no Estado de Minas Gerais, buscando o contínuo aprimoramento e desenvolvimento do ensino e da extensão."
                    </p>                    
                </div>

                <div class="span3" id="footerArea4">
                    <h3>Entre em Contato</h3>                                                                 
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Telefone:</span>
                        <br />
                        (31) 9999-9999 / 8888-8888                                                                      
                    </li>
                    
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:info@yourdomain.com" title="Email">contato@ufb.com</a>
                    </li>
                    
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Endereço:</span>
                        <br />
                        Rodovia MG 3<br />
                        S/N Bação, Minas Gerais<br />
                        Brasil
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright" align="center">
                        Copyright © 2015 UFB. Todos os direitos reservados.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<br/><br/><br/>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>


</body>
</html>