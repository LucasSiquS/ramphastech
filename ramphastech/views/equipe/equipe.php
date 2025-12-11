<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramphastech - Nossa Equipe</title>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="img/pagina.png" href="./img/pagina.png">
    <link rel="stylesheet" href="../../public/css/equipe.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Animação de entrada dos membros da equipe
            $(".pessoa").each(function(index){
                $(this).delay(200 * index).animate({opacity: 1, top: "0"}, 600);
            });
            
            // Verificar se há tema salvo
            if (localStorage.getItem('darkMode') === 'true') {
                $("body").addClass("dark-mode");
            }

            // Função para alternar tema
            window.toggleTheme = function() {
                $("body").toggleClass("dark-mode");
                // Salvar preferência
                localStorage.setItem('darkMode', $("body").hasClass("dark-mode"));
            }
        });
    </script>
</head>
<body>
    <header class="navbar">
        <div class="logo-text">Ramphastech</div>
        <ul class="nav-links">
            <li><a href="../../public/index.php">Início</a></li>
            <li><a href="equipe.php" style="border-bottom: 2px solid black;">Equipe</a></li>
            <li><a href="../../public/index.php#ideais">Ideais</a></li>
            <li><a href="../../public/index.php#contato">Contato</a></li>
        </ul>
        <div class="theme-logo">
            <button class="toggle-theme" onclick="toggleTheme()">🌙</button>
            <img src="../../public/img/pagina.png" alt="Logo Tucano" class="logo">
        </div>
    </header>

    <section class="equipe-container">
        <h2>Nossa Equipe!</h2>
        <div class="equipe">
            <div class="pessoa" style="opacity: 0; position: relative; top: 50px;">
                <img src="../../public/img/sara.jpeg" alt="Sara">
                <div>
                    <h3>Sara Ribeiro</h3>
                    <p class="cargo">Dev. Front-End e Designer</p>
                    <p class="email">sara.ribeiro1@aluno.ifsp.edu.br</p>
                    <p>Meu nome é Sara Ribeiro e sou responsável pela parte do front-end da empresa Ramphastech.
                    Me interesso muito pela questão racial e gosto muito da área das artes em especial por moda e acredito que há várias formas de perpetuar a resistência e que a tecnologia vem para potencializá-la.</p>
                </div>
            </div>
            <div class="pessoa" style="opacity: 0; position: relative; top: 50px;">
                <img src="../../public/img/pablo.jpeg" alt="Pablo">
                <div>
                    <h3>Pablo Henrique</h3>
                    <p class="cargo">Dev. Back-End
                        <br>Analista de Segurança</p>
                    <p class="email">pablo.l@aluno.ifsp.edu.br</p>
                    <p>Meu nome é Pablo Henrique e atuo tanto no front-end quanto no back-end dessa empresa, oferecendo sempre o máximo suporte em ambas as áreas. Embora eu ache a programação fascinante, também tenho um grande interesse pelas áreas da Biologia e da Gastronomia.</p>
                </div>
            </div>
            <div class="pessoa" style="opacity: 0; position: relative; top: 50px;">
                <img src="../../public/img/fernanda.jpg" alt="Fernanda">
                <div>
                    <h3>Maria Fernanda</h3>
                    <h2>Designer</h2>
                    <p class="cargo">Dev. Front-End e Designer</p>
                    <p class="email">f.saugo@aluno.ifsp.edu.br</p>
                    <p>Meu nome é Maria Fernanda e faço parte da direção criativa e do desenvolvimento front-end. Me interesso por questões sociais, principalmente quando diz respeito à periferia e as oportunidades tecnológicas que podem contribuir para seus negócios.</p>
                </div>
            </div>
            <div class="pessoa" style="opacity: 0; position: relative; top: 50px;">
                <img src="../../public/img/lucas.jpg" alt="Lucas">
                <div>
                    <h3>Lucas Siqueira</h3>
                    <h2>Gerente</h2>
                    <p class="cargo">Dev. Back-End</p>
                    <p class="email">siqueira.lucassilva23@gmail.com</p>
                    <p>Sou o gerente da equipe responsável pela empresa Ramphastech. Tenho grandes afinidades com questões sociais, principalmente as que podem ser relacionadas com a tecnologia. Também sou um dos responsáveis pelo back-end e do controle de qualidade dos nossos projetos.</p>
                </div>
            </div>
            <div class="pessoa" style="opacity: 0; position: relative; top: 50px;">
                <img src="../../public/img/nuemo.jpg" alt="Nuemo">
                <div>
                    <h3>Noemy Lima</h3>
                    <h2>Vice-Gerente</h2>
                    <p class="cargo">Dev. Back-End</p>
                    <p class="email">noemy.lima@aluno.ifsp.edu.br</p>
                    <p>Meu nome é Noemy Lima, mas prefiro que me chamem de Nuemo. Sou vice-gerente da empresa, faço parte da direção criativa, do controle de qualidade e também sou desenvolvedora back-end. 
                    Me interesso muito por pautas de inclusão social e acredito que a tecnologia tem grande potencial para agir positivamente nesse cenário.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Ramphastech. Todos os direitos reservados.</p>
            <img src="../../public/img/rodape.png" alt="Logo Tucano" class="logo">
        </div>
    </footer>
</body>
</html>