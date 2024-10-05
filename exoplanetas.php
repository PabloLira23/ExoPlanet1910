<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./css/exoplanetas.css">
    <style>
        /* Adicionando estilos para ocultar planetas */
        .planet-block {
            display: none; /* Ocultar todos os planetas inicialmente */
        }

        .planet-block.active {
            display: block; /* Exibir apenas o planeta ativo */
        }
    </style>
</head>
<body>

    <header class="esco">
        <h1>Alguns exoplanetas notáveis:</h1>
        <p>Clique sobre uma das imagens para mais informações</p>
    </header>

    <div class="container">
        <!-- Botão de seta esquerda -->
        <div class="arrow left">&#10094;</div>

        <div class="lista">
            <!-- KELT-9b -->
            <div class="planet-block active">
                <a href="planetas\planetKELT-9b.html"><img src="./imgplanetas/KELT-9b.webp" alt="Imagem do planeta KELT-9b"></a>
                <p class="planet-name">KELT-9b</p>
                <p class="description">KELT-9b é como o planeta que escolheu viver no "modo fritadeira". Localizado a 670 anos-luz de distância, ele é um gigante gasoso com temperaturas impressionantes, chegando a 4.300°C! Isso porque ele orbita muito próximo à sua estrela-mãe, KELT-9, completando uma volta em apenas 1,5 dias. Está tão perto desse "solzão" que vive em um calor extremo constante. Se fosse aqui na Terra, seria o lugar ideal para literalmente fritar um ovo só com o calor ambiente.</p>
            </div>

            <!-- OGLE-2005-BLG-390Lb -->
            <div class="planet-block">
                <a href="planetas\OGLE-2005-BLG-390Lb.html"><img src="./imgplanetas/OGLE-2005-BLG-390Lb.jpg" alt="Imagem do planeta OGLE-2005-BLG-390Lb"></a>
                <p class="planet-name">OGLE-2005-BLG-390Lb</p>
                <p class="description">OGLE-2005-BLG-390Lb é um exoplaneta a cerca de 25.000 anos-luz da Terra, com um tamanho 5,5 vezes maior que o nosso. É um "super-Terra" gelado, provavelmente composto de gelo e rochas. Descoberto em 2006 por meio da microlente gravitacional, sua existência revela os mistérios do cosmos e sugere que há muitos outros mundos fascinantes por descobrir.
                </p>
            </div>

            <!-- Adicione os outros planetas aqui, todos com a classe "planet-block" -->
            <!-- DENIS-P J082303.1-491201 b -->
            <div class="planet-block">
                <a href="planetas\AT-P-67b.html"><img src="./imgplanetas/DENIS-P J082303.1-491201 b.jpg" alt="Imagem do planeta DENIS-P J082303.1-491201 b"></a>
                <p class="planet-name">AT-P-67b</p>
                <p class="description">AT-P-67b é o maior exoplaneta conhecido, situado a 1.800 anos-luz da Terra. Este gigante gasoso azul orbita sua estrela a cada 3,5 dias, gerando calor intenso, e sua superfície, envolta em nuvens densas, ainda é um mistério. Descoberto por telescópios avançados, ele representa a diversidade cósmica e promete revelar segredos fascinantes em futuras explorações.</p>
            </div>

            <div class="planet-block">
                <a href="planetas\Gliese 436b.html"><img src="./imgplanetas/gliese-436b.jpg" alt="Imagem do planeta gliese"></a>
                <p class="planet-name">GLISE-436b</p>
                <p class="description">AT-P-67b é o maior exoplaneta já descoberto, localizado a 1.800 anos-luz da Terra. Este gigante gasoso tem uma coloração azul devido à sua atmosfera única e orbita sua estrela a cada 3,5 dias, gerando intenso calor. Envolto em nuvens densas, sua superfície permanece cheia de mistérios. Descoberto por telescópios avançados, AT-P-67b é um ícone da diversidade cósmica, deixando a expectativa sobre os segredos que ainda podem ser revelados em futuras explorações.</p>
            </div>

            <!-- OGLE-2005-BLG-390Lb -->
            <div class="planet-block">
                <a href="planetas\HD 189733 b.html"><img src="./imgplanetas/HD 189733 b.jpg" alt="Imagem do planeta HD"></a>
                <p class="planet-name">HD 189733 b</p>
                <p class="description">HD 189733 b é um exoplaneta a 64 anos-luz que aparenta ser belo com sua cor azul, mas possui um clima extremo. Ventos podem atingir 8.700 km/h, e chove vidro derretido devido a partículas de silicato na atmosfera, criando um ambiente extremamente hostil.</p>
            </div>

            <!-- Adicione os outros planetas aqui, todos com a classe "planet-block" -->
            <!-- DENIS-P J082303.1-491201 b -->
            <div class="planet-block">
                <a href="#"><img src="./imgplanetas/J1407b.jpg" alt="Imagem do planeta DENIS-P J082303.1-491201 b"></a>
                <p class="planet-name">J1407b</p>
                <p class="description">J1407b é um exoplaneta localizado a 420 anos-luz da Terra, conhecido por seu colossal sistema de anéis, que se estende por mais de 90 milhões de quilômetros, superando até os anéis de Saturno. Composto por partículas de gelo e rocha, esse gigante gasoso desafia nosso entendimento sobre a formação de sistemas planetários.</p>
            </div>

            <div class="planet-block">
                <a href="planetas\WASP-103b.html"><img src="./imgplanetas/wha.jpg" alt="Imagem do planeta KELT-9b"></a>
                <p class="planet-name">KOI 1843.03</p>
                <p class="description">WASP-103b é um exoplaneta localizado a 1.700 anos-luz da Terra, conhecido como um "Júpiter quente". Devido à sua proximidade com a estrela WASP-103, ele é achatado e apresenta um equador saliente, moldado pelas forças de maré. Com temperaturas que podem ultrapassar 1.500°C, esse gigante gasoso oferece uma perspectiva única sobre como a gravidade das estrelas pode alterar a forma dos planetas.</p>
            </div>

            <!-- OGLE-2005-BLG-390Lb -->
            <div class="planet-block">
                <a href="planetas\Proxima Centauri b.html"><img src="./imgplanetas/Proxima Centauri b.jpg" alt="Imagem do planeta OGLE-2005-BLG-390Lb"></a>
                <p class="planet-name">Proxima Centauri b</p>
                <p class="description">Proxima Centauri b é o exoplaneta mais próximo da Terra, a 4,2 anos-luz de distância, situado na zona habitável de Proxima Centauri. Com tamanho semelhante ao da Terra e potencial para água líquida, ele é um alvo na busca por vida extraterrestre, embora sua proximidade a uma anã vermelha levante dúvidas sobre sua habitabilidade devido à radiação intensa.</p>
            </div>
            
            <!-- OGLE-2005-BLG-390Lb -->
            <div class="planet-block">
                <a href="planetas\Kepler-452b.html"><img src="./imgplanetas/KEPLER.jpg" alt="Imagem do planeta OGLE-2005-BLG-390Lb"></a>
                <p class="planet-name">KEPLER-452b</p>
                <p class="description">KEPLER-452b, conhecido como "Terra 2", é um exoplaneta a 1.400 anos-luz que orbita uma estrela semelhante ao Sol na zona habitável, permitindo a possibilidade de água líquida. Com um tamanho 60% maior que a Terra, desperta o interesse sobre sua superfície e a evolução futura da Terra. É um alvo intrigante para exploração espacial.</p>
            </div>
            <!-- Adicione os outros planetas aqui, todos com a classe "planet-block" -->
            <!-- DENIS-P J082303.1-491201 b -->
            <div class="planet-block">
                <a href="planetas\PSR B1620-26 b.html"><img src="./imgplanetas/PSR B1620-26 b.jpg" alt="Imagem do planeta DENIS-P J082303.1-491201 b"></a>
                <p class="planet-name">PSR B1620-26b</p>
                <p class="description">PSR B1620-26 b é um exoplaneta de 13 bilhões de anos, localizado a 12.400 anos-luz da Terra, que orbita um pulsar. Descoberto em 1993, é um dos primeiros planetas fora do sistema solar e desafia conceitos sobre formação planetária. Com características semelhantes a um “Júpiter quente”, levanta questões sobre a vida em mundos antigos.</p>
            </div>

            <!-- Outros planetas... -->
        </div>

        <!-- Botão de seta direita -->
        <div class="arrow right">&#10095;</div>
    </div>

    <script>
        const planetBlocks = document.querySelectorAll('.planet-block');
        const leftArrow = document.querySelector('.arrow.left');
        const rightArrow = document.querySelector('.arrow.right');
        
        let currentIndex = 0;

        // Mostrar o planeta inicial
        planetBlocks[currentIndex].classList.add('active');

        // Função para atualizar a visibilidade dos planetas
        function updatePlanets() {
            planetBlocks.forEach((planet, index) => {
                if (index === currentIndex) {
                    planet.classList.add('active');
                } else {
                    planet.classList.remove('active');
                }
            });
        }

        // Evento para a seta esquerda
        leftArrow.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : planetBlocks.length - 1;
            updatePlanets();
        });

        // Evento para a seta direita
        rightArrow.addEventListener('click', () => {
            currentIndex = (currentIndex < planetBlocks.length - 1) ? currentIndex + 1 : 0;
            updatePlanets();
        });
    </script>

</body>
</html>