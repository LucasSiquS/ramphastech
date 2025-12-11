<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramphastech - Início</title>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="img/pagina.png" href="./img/pagina.png">
    <link rel="stylesheet" href="../public/css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Verificar se há tema salvo
            if (localStorage.getItem('darkMode') === 'true') {
                $("body").addClass("dark-mode");
            }

            // Suavizar scroll para âncoras
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.getAttribute('href'));
                if(target.length) {
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });

            // Formulário de contato
            $("#contact-form").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "https://formsubmit.co/ajax/tcc.4info2025@gmail.com",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    beforeSend: function() {
                        $(".form button").text("Enviando...").prop("disabled", true);
                    },
                    success: function () {
                        alert("Mensagem enviada com sucesso! 🚀");
                        $("#contact-form")[0].reset();
                        $(".form button").text("Enviar").prop("disabled", false);
                    },
                    error: function (xhr, status, error) {
                        alert("Ocorreu um erro 😵: " + error);
                        $(".form button").text("Enviar").prop("disabled", false);
                    }
                });
            });

            // Alternar tema
            $("#theme-toggle").click(function () {
                $("body").toggleClass("dark-mode");
                // Salvar preferência
                localStorage.setItem('darkMode', $("body").hasClass("dark-mode"));
            });
        });
    </script>
</head>
<body>
    <header class="navbar">
        <div class="logo-text">Ramphastech</div>
        <ul class="nav-links">
            <li><a href="#inicio">Início</a></li>
            <li><a href="../views/equipe/equipe.php">Equipe</a></li>
            <li><a href="#ideais">Ideais</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
        <div class="theme-logo">
            <button class="theme-toggle" id="theme-toggle">🌙</button>
            <img src="img/pagina.png" alt="Logo Tucano" class="logo">
        </div>
    </header>

    <div class="main-content">
        <div id="inicio" class="container">
            <div class="text-section">
                <h1>BEM VINDE AO RAMPHASTECH!</h1>
                <p>Desenvolvemos sistemas para a internet sob demanda, priorizando inovação, acessibilidade e eficiência. Com ética e transparência, buscamos soluções que agreguem valor, promovam inclusão digital e atendam às necessidades de nossos clientes.</p>
            </div>
            <div class="image-section">
                <img src="img/page.png" alt="Imagem Ramphastech">
            </div>
        </div>

        <div id="ideais" class="ideals-section">
            <h1>NOSSOS IDEAIS:</h1>
            <div class="ideals-container">
                <div class="row">
                    <div class="ideal-box">
                        <h2>MISSÃO:</h2>
                        <p>Nossa missão é desenvolver sistemas para a internet sob demanda, oferecendo soluções práticas e eficientes de acordo com a necessidade do cliente. Comprometemo-nos a oferecer excelência em cada projeto, mantendo sempre uma postura ética, profissional e transparente, garantindo que as soluções implementadas agreguem valor real aos nossos parceiros e usuários finais.</p>
                    </div>
                    <div class="ideal-box">
                        <h2>VISÃO:</h2>
                        <p>Nossa visão como empresa é proporcionar acessibilidade para todos os públicos, através de inovações tecnológicas inclusivas. Estamos empenhados em promover a inclusão digital por meio de inovações que ultrapassam barreiras tecnológicas e sociais, contribuindo para um mundo mais justo, equitativo e conectado.</p>
                    </div>
                </div>
                <div class="ideal-box-value">
                    <h2>VALORES:</h2>
                    <p><b>Inclusão:</b> Acreditamos que a tecnologia deve ser acessível para todos, independentemente de suas limitações físicas, cognitivas ou sociais.<br><br>
                    <b>Inovação:</b> Valorizamos a criatividade e a inovação contínua, buscando sempre novas formas de aprimorar os sistemas que desenvolvemos.<br><br>
                    <b>Responsabilidade:</b> Atuamos com ética e transparência em todas as nossas ações, respeitando nossos clientes, colaboradores e parceiros, e promovendo práticas sustentáveis que minimizem o impacto ambiental.<br><br>
                    <b>Diversidade:</b> Valorizamos a diversidade sociocultural e buscamos sempre um ambiente inclusivo onde diferentes perspectivas sejam ouvidas e respeitadas.<br><br>
                    <b>Compromisso com o cliente:</b> Colocamos as necessidades do cliente em primeiro lugar, oferecendo soluções personalizadas aos seus objetivos e desafios.<br><br>
                    <b>Integridade:</b> Agimos com honestidade e comprometimento, mantendo a transparência em todas as nossas relações e respeitando os princípios éticos da empresa.</p>
                </div>
            </div>
        </div>

        <div id="contato">
            <div class="contact-content">
                <h1>CONTATO:</h1>
                <p>Se você deseja entrar em contato conosco, preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>
                <div class="form">
                    <form id="contact-form">
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" placeholder="Se identifique." required>
                        
                        <label for="message">Deixe sua mensagem:</label>
                        <p style="text-align: center; font-size: 0.9rem; color: #666; margin-top: -10px; margin-bottom: 10px;">
                        <br>
                        Deixe também uma forma de contato ao fim do comentário, um email de preferência.
                        </p>
                        <textarea id="message" name="message" placeholder="Escreva aqui sua mensagem." required></textarea>
                        
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Ramphastech. Todos os direitos reservados.</p>
            <img src="img/rodape.png" alt="Logo Tucano" class="logo">
        </div>
    </footer>
</body>
</html>