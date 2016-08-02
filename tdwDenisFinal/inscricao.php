<?php require_once('conexao.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>U F B</title>
    

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
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
	<style type="text/css">
         .the-icons {list-style-type: none;margin: 0 0 10px 30px;}
    </style>

    <script type="text/javascript">
        function mascara(t, mask){
            var i = t.value.length;
            var saida = mask.substring(1,0);
            var texto = mask.substring(i)
            if (texto.substring(0,1) != saida){
                t.value += texto.substring(0,1);
            }
        }
    </script>  
    <script type="text/javascript" src="scripts/valida.js"></script>     

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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Inscreva-se</span>
            </div>
                
            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Inscreva-se</h1>
                    <h3 style="color:#FF6633;"><?php echo @$_GET['msg'];?></h3>
                    <hr>
    
    <!--Start Contact form -->                                                      
    <form name="enq" method="post" action="cadCandidato.php" onsubmit="return validarFormulario(this)">
        <fieldset>
            <input type="text" name="tNome" id="cNome" value=""  class="input-block-level" placeholder="Nome completo" required="required"/>
            <input type="text" name="tNasc" id="cNasc" value=""  class="input-block-level" placeholder="Data de Nascimento" maxlength="10" onkeypress="mascara(this,'##/##/####')" required="required"/>
            

            <select id="cSexo" name="sSexo" class="form-control">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
                
                              
            <input type="text" name="tCpf" id="cCpf" onblur="return verificarCPF(this.value)" value=""  class="input-block-level" placeholder="CPF" maxlength="14" onkeypress="mascara(this,'###.###.###-##')"/>
            <input type="text" name="tRg" id="cRg" value=""  class="input-block-level" placeholder="Digite o RG"  maxlength="15" required="required"/>
            <input type="text" name="tLongra" id="cLongra" value=""  class="input-block-level" placeholder="Nome da rua" required="required"/>
            <input type="number" name="tNumero" id="cNumero" value=""  class="input-block-level" placeholder="Número" required="required"/>
            <input type="text" name="tCompl" id="cCompl" value=""  class="input-block-level" placeholder="Complemento" required="required"/>
            <input type="text" name="tBairro" id="cBairro" value=""  class="input-block-level" placeholder="Bairro" required="required"/>
            <input type="text" name="tCid" id="cCid" value=""  class="input-block-level" placeholder="Cidade" required="required"/>
            <input type="text" name="tCep" id="cCep" value=""  class="input-block-level" placeholder="CEP" maxlength="10" onkeypress="mascara(this,'##.###-###')" required="required" />
            <input type="text" name="tTelfixo" id="cTelfixo" value=""  class="input-block-level" placeholder="Telefone Fixo" maxlength="12" onkeypress="mascara(this,'## ####-####')" required="required"/>
            <input type="text" name="tTelcelular" id="cTelcelular" value=""  class="input-block-level" placeholder="Telefone Celular" required="required"/>
            <input type="email" name="tMail" id="cMail" value=""  class="input-block-level" placeholder="e-mail" required="required"/>
            
            <label class="col-md-4 control-label" for="selectbasic">Curso: 1ª opção</label>
            <select id="cCurso1" name="sCurso1" class="form-control">
            <!-- Pegando os dados direto do banco de dados --> 
            <!-- Estou buscando na planilha "cursos" os cursos cadastrados --> 
                <?php  
                    $getcursos = "SELECT * FROM cursos";
                    $query = $mysqli -> query($getcursos);

                    while ($getcursosline = mysqli_fetch_array($query)) {
                        $curso1 = $getcursosline['nomedocurso'];
                        echo "<option value='$curso1'>$curso1</option>";                   
                    }
                ?>
            

            </select>

            <label class="col-md-4 control-label" for="selectbasic">Curso: 2ª opção</label>
            <select id="cCurso2" name="sCurso2" class="form-control">
            <!-- Pegando os dados direto do banco de dados --> 
            <!-- Estou buscando na planilha "cursos" os cursos cadastrados --> 
                   <?php  
                    $getcursos = "SELECT * FROM cursos";
                    $query = $mysqli -> query($getcursos);

                    while ($getcursosline = mysqli_fetch_array($query)) {
                        $curso2 = $getcursosline['nomedocurso'];
                        echo "<option value='$curso1'>$curso2</option>";                   
                    }
                ?>
            </select>

            <div class="actions">

                
            <input type="submit" value="Inscrever" name="submit" id="submitButton" class="btn btn-info pull-right" title="Clique para finalizar !" />
            </div>    
        </fieldset>
    </form>                  
            <!--End Contact form -->                                             
                </div>
                
         <!--Edit Sidebar Content here-->    
            <form method="post" action="acompanharprocesso.php">
                <div class="span4 sidebar">
                    <div class="sidebox">
                        <h3 class="sidebox-title">Acompanhe o Processo</h3>
                    <p>
                        <address><strong>CPF</strong><br />
                        <input type="text" name="tCpf" id="cCpf" value=""  class="input-block-level" placeholder="Digite o CPF" maxlength="14" onkeypress="mascara(this,'###.###.###-##')" required="required"/>
                        <input type="submit" value="Acessar" name="submit" id="submitButton" class="btn btn-info pull-right" title="Acesse sua àrea!" />
                    <!-- End Side Categories -->
                                        
                    </div>
                </div>
            </form>
                
        </div> 
        </div>
            <!--/End Sidebar Content-->
                
                
            </div>          
            <div id="footerInnerSeparator"></div>
        </div>
    </div>

<!-- Configuração do Rodapé --> 
<div id="footerOuterSeparator"></div>
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