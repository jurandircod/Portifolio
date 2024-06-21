<!DOCTYPE html>
<html lang="pt-br">

<?php
include("Alerts.php");

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/scrollreveal"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!---->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="images/pessoa.png" type="image/x-icon">

     <!-- SweetAlert2 -->
     <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <title>Jurandir</title>

</head>

<body>

    <header>
        <div class="interface">
            <!-- <div class="logo"> 
                <a href="#">
                    <img src="images/logo.png" class="logo" alt="">
                </a>
            </div>-->
            <nav class="menu-desktop navbar-expand">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#especialidades">Especialidades</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#portfolio">Projetos</a></li>
                    <li>
                        <div class="btn-contato">
                            <a href="#formulario">
                                <button>Contato</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>





        </div><!--interface-->
    </header>

    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>Jurandir Aparecido dos Santos Sobrinho da Cruz<span>.</span></h1>
                        <p>Programador back-end junior com habilidades em Infraestrutura de TI
                        <div class="btn-contato">
                            <a href="baixar.php" target="_blank">
                                <button>Baixar Currículo</button>
                            </a>
                        </div>
                    </div>

                    <div class="img-topo-site">
                        <img src="images/pessoa.png" alt="">
                    </div>
                </div>
            </div><!--interface-->
        </section>

        <section class="especialidades" id="especialidades">
            <div class="interface">
                <h2 class="titulo">MINHAS <span>ESPECIALIDADES</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class="bi bi-filetype-php"></i>
                        <h3>PHP</h3>
                        <p></p>
                    </div>

                    <div class="especialidades-box">
                        <i class="bi bi-ubuntu"></i>
                        <h3>Linux</h3>
                        <p></p>
                    </div>

                    <div class="especialidades-box">
                        <i class="bi bi-code square"></i>
                        <h3>Laravel</h3>
                        <p></p>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-bootstrap-fill"></i>
                        <h3>bootstrap</h3>
                        <p></p>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-filetype-sql"></i>
                        <h3>MySQL</h3>
                        <p></p>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-filetype-js"></i>
                        <h3>JavaScript</h3>
                        <p></p>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-hdd-rack"></i>
                        <h3>TrueNas</h3>
                        <p></p>
                    </div>
                    <div class="especialidades-box">
                        <i class="bi bi-server"></i>
                        <h3>Docker</h3>
                        <p></p>
                    </div>
                </div>

            </div>

        </section>

        <section class="sobre" id="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="images/pessoa2.png" alt="">
                    </div>
                    <div class="txt-sobre">
                        <h2>SOBRE <span>MIM.</span></h2>
                        <P>
                            Atualmente, estou me especializando em programação web, com foco em linguagens como PHP
                            e JavaScript. Tenho experiência em todo o processo de desenvolvimento, desde o levantamento
                            de requisitos, diagramação de classes e casos de uso, até a implementação de modelos
                            amplamente utilizados, como o MVC.


                        </P>
                        <P>
                            Tenho uma paixão pela computação desde a infância, quando ganhei
                            meu primeiro computador aos 12 anos e nunca mais me afastei desse mundo. Comecei meus
                            estudos como suporte técnico e, posteriormente, ampliei meus conhecimentos em infraestrutura
                        </P>
                        <div class="btn-social">
                            <a href="" target="_blank"><button><i class="bi bi-instagram"></i></button></a>
                            <a href="" target="_blank"><button><i class="bi bi-linkedin"></i></button></a>
                            <a href="https://github.com/jurandircod" target="_blank"><button><i class="bi bi-github"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <div class="interface">
                <h2 class="titulo">MEUS <span>PROJETOS</span></h2>
                <div class="flex">
                    <div class="img-port" style="background-image: url(images/imagem.jpg);">
                        <div class="overlay"><a href="https://ramaiscruzeirodooeste.great-site.net/?i=1" target="_blank">Ramais Cruzeiro
                                do Oeste</a></div>
                    </div>
                    <div class="img-port" style="background-image: url(images/projeto2.png);">
                        <div class="overlay"><a href="projetos/Programa_1/index.php" target="_blank">Datas Exif</a><a href="">github</a></div>
                    </div>
                    <div class="img-port" style="background-image: url(images/projeto3.png);">
                        <div class="overlay"><a href="projetos/agendamentos/index.php" target="_blank">agendamentos</a></div>
                    </div>

                    <div class="img-port">
                        <div class="overlay"><a href="" target="_blank">Em construção</a></div>
                    </div>
                    <div class="img-port">
                        <div class="overlay"><a href="" target="_blank">Em construção</a></div>
                    </div>

                </div>
            </div>
        </section>

        <section class="formulario" id="formulario">
            <div class="interface">
                <h2 class="titulo">FALE <span>COMIGO</span></h2>
                <form action="contact.php" method="post">
                    <input type="text" name="nome" id="" placeholder="Seu nome" required>
                    <input type="text" name="email" id="" placeholder="Seu Email" required>
                    <input type="tel" name="celular" id="" placeholder="Seu celular">
                    <textarea name="mensagem" id="" placeholder="Sua mensagem" required></textarea>
                    <div class="btn-enviar"><input type="submit" value="enviar"></div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="interface">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer"><img class="logo" src="images/logo.png" alt=""></div>

                    <div class="btn-social">
                        <a href=""><button><i class="bi bi-instagram"></i></button></a>
                        <a href="https://www.linkedin.com/in/jurandir-aparecido-38956219b/" target="_blank"><button><i class="bi bi-linkedin"></i></button></a>
                        <a href="https://github.com/jurandircod" target="_blank"><button><i class="bi bi-github"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="line-footer borda">
                <p><i class="bi bi-envelope"></i><a href="mailto:jurandiraparecido19651965@gmail.com">jurandiraparecido19651965@gmail.com</a></p>
            </div>
        </div>
    </footer>


    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>

    <?php 
    $status = $_GET['status']; 
    
    Alertas::alerts($status);
    
    ?>

    
</body>


<script src="script.js">

</script>

</html>