<?php
session_start();
include("php/conectar.php");
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="fontawesome-free-5.15.2-web/js/all.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cursos | Aperfeiçoando O Meu Eu</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-link" href="inicio.php"><li class="nav-item">Início</li></a>
                        <a class="nav-link active" href="cursos.php"><li class="nav-item">Cursos</li></a>
                        <a class="nav-link" href="matricula.php"><li class="nav-item">Inscreva-se</li></a> 
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-link" data-toggle="modal" data-target="#sessao" href="#">
                            <li class="nav-item"> <i class="fas fa-sign-out-alt"></i> </li>
                        </a>
                        
                    </ul>
                </div>
        </nav>
        <header>
            <img class="img-fluid imagemHeader container-fluid" src="imagens/header.png" alt="">
        </header>
        <section class="container" id="sec">
            <div class="row">
                <h1 class="titulo container-fluid">Inteligência Emocional</h1>
                <picture class="col-md-3 mr-auto mt-2">
                    <img class="cursoimagem" src="imagens/cursos/inteligencia-emocional.jpg" alt="Inteligência Emocional">
                </picture>
                <div class="descricao col-sm-12 col-md-7 ml-auto bg-light">
                    <p><q>As pessoas são contratadas por suas habilidades técnicas, mas são demitidas pelo seu comportamento</q>. Na atual era digital, cada vez mais os aspectos técnicos vem sendo supridos pelos avanços tecnológicos, como a partir da inteligência artificial e do aprendizado da máquina.</p>

                    <p> Exigência, então, se volta para o desenvolvimento de habilidades comportamentais, as chamadas soft skills, em um processo que precisa ser contínuo para lidar com as situações complexas já existentes e as que ainda irão surgir.</p>
                    
                    <p>Pois uma das soft skills mais importantes (e também mais difíceis de se desenvolver) é justamente a inteligência emocional.
                    Quando bem trabalhada, essa é uma competência que traz maior equilíbrio na vida pessoal e sucesso profissional para quem almeja evoluir na carreira. </p>
                </div>
                <div class="col-md-12 bg-light mb-2">
                    <p>De acordo com a psicologia, inteligência emocional é a capacidade de identificar e lidar com as emoções e sentimentos pessoais e de outros indivíduos. Um exemplo é a pessoa que consegue terminar suas tarefas e atingir suas metas, mesmo sentindo-se triste e ansiosa ao longo de um dia de trabalho. Ou seja, é uma habilidade que permite que as pessoas gerenciem melhor seus sentimentos e a forma que agirão com base neles.</p>
                    <p>Interessado em aprender mais sobre a inteligência emocional e como domina-la? <a href="matricula.html">Inscreva-se</a> no curso e vem aprender connosco.</p>
                </div>
                <h1 class="titulo container-fluid">Contabilidade</h1>
                    <picture class="col-md-3 mr-auto mt-2">
                        <img class="cursoimagem" src="imagens/cursos/contabilidade.png" alt="Contabilidade">
                    </picture>
                <div class="descricao col-md-7 ml-auto bg-light mb-3">
                    <p>Toda empresa tem que ter um bom profissional de Contabilidade, seja em épocas de crise ou de vacas gordas. No fim do mês, as contas têm que fechar e tudo tem que estar dentro da lei.</p>

                    <p>Trabalhar com tantas variáveis e ainda ter visão sobre as tendências financeiras do mercado fazem parte do trabalho do contabilista (ou contador). Para isso, ter uma formação qualificada é fundamental.</p>
                    
                    <p>O curso de Contabilidade ? Tem várias matérias da área da Matemática, mas o estudante também passa por disciplinas ligadas ao Direito, Administração Economia e Planejamento Estratégico. Contabilidade envolve números e cálculos, legislação e visão estratégica. Interessado em aprender mais e se tornar um contabilista, <a href="matricula.html">Inscreva-se aqui</a>.  </p>
                </div>
                <h1 class="titulo container-fluid">Educação Financeira</h1>
                <picture class="col-md-3 mr-auto mt-2">
                    <img class="cursoimagem" src="imagens/cursos/ed-financeira.png" alt="Educação Financeira">
                </picture>
                <div class="descricao col-md-7 ml-auto bg-light mb-1">
                    <p>Você sabe o que é educação financeira? Se você quer ter suas finanças em dia e uma vida mais tranquila, conhecer esse conceito é um dos passos mais importantes. Afinal, a partir dele, você saberá como evitar situações que prejudicam sua saúde financeira.</p>
                    <p>O conceito de educação financeira é o processo que permite melhorar a compreensão em relação aos produtos e serviços financeiros, se tornando capaz de fazer escolhas bem informadas.
                    Além disso, a educação financeira também te possibilita ser mais consciente frente às boas oportunidades e aos riscos envolvidos nos mais variados tipos de investimento.</p>
                    <p>Isso significa que quem tem uma boa educação financeira são apenas as pessoas que têm várias dígitos no banco? Nada disso. Aqui você vai aprender que isso não tem a ver somente com quanto você tem no bolso agora, mas o que você faz para valorizar o que tem, pensando no futuro.
                    Dessa forma, quem tem uma vida financeira bem educada tem um estilo de vida mais tranquilo e, consequentemente, pode aproveitar melhor as chances de fazer seu dinheiro se multiplicar com segurança</p>
                </div>
            </div>
        </section>
        <footer class="footer container-fluid">
            <strong>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                        <span class="contact-title"></span> <i class="fa fa-envelope"></i> onildepaulo@gmail.com
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="contact-title"></span> Calemba 2 - Vila Kiaxi, Luanda-Angola
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                        <i class="far fa-clock"></i>
                        <span class="contact-title">Horário:</span> 8:00-18:00
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                        <i class="fab fa-whatsapp"></i>
                        <span class="contact-title"></span> (+244) 928507891
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                        <ul>
                            <li>Inteligencia emocional</li>
                            <li>Eduação Financeira</li>
                            <li>Contabilidade</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <p>
                            Fundado em Dezembro de 2020.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <p>
                            Motivações: 
                            <ul>
                                <li>Ensinar</li>
                                <li>Inspirar</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </strong>
        </footer>
<?php
if(isset($_SESSION['nao_autenticado'])):
?>
<div class="notification is-danger">
  <p>ERRO: Usuário ou senha inválidos.</p>
</div>
<?php
endif;
unset($_SESSION['nao_autenticado']);
?>
     <!--Modal-->
        <div class="modal fade" id="sessao" tabindex="-1" role="dialog">
            <div class="modal-dialog bg-light" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info">Iniciar Sessão</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>
                                <i class="far fa-times-circle text-info"></i>
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input type="email" class="formodal form-control col-md-5 container" placeholder="Email" name="email" required autofocus>
                                <input type="password" class="formodal form-control col-md-5 mt-2 container" placeholder="Senha" name="senha" required maxlength="8">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-info col-md-3 mt-2">Entrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <h6 class="mr-auto ml-auto text-info">Aperfeiçoando o Meu Eu.</h6>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>