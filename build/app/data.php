<?php
class Data {
    public static $meta = array(
        "title" => "Criatronic",
        "description" => "Descrição",
        "image" => "share.jpg",
        "keywords" => "",
        "site" => BASE_URL,
        "twitter" => "@criatronic",
    );
    
    public static $about = array(
        "intro" => "Atuando há mais de 28 anos nas áreas de promoções, eventos, feiras e convenções, PDV e decoração de natal, somos líderes no desenvolvimento de soluções mecatrônicas. Junto a buffets e parques, vimos também, há 10 anos, desenvolvendo brinquedos exclusivos e inovadores, que estimulam a competitividade e interação entre pais e filhos. Com uma linha de produtos que agrada desde os pequenos até os adultos, nossa empresa vem conquistando cada vez mais espaço nos buffets de todo o Brasil.",
        "list" => array(
            array(
                "title" => "Missão",
                "icon" => "mission.png",
                "text" => "Visamos proporcionar aos clientes a alegria e satisfação em receber algo muito além das suas expectativas, através de soluções inovadoras, simples e criativas.",
            ),
            array(
                "title" => "Promoções",
                "icon" => "promotion.png",
                "text" => "Desenvolvemos para a área de promoções e eventos, sorteadores e projetos especiais, oferecendo o que há mais de novo seja na forma de venda ou locação.",
            ),
            array(
                "title" => "Buffet e Parques",
                "icon" => "buffet.png",
                "text" => "Com projetos diferenciados e sob medida, quebramos o paradigma: “projetos especiais = preços elevados”,  demonstrando que a inovação é fundamental e deve estar sempre presente na área de entretenimento.",
            )
        )
    );
    
    public static $productClass = array(
        0 => array(
            "title" => "Criatoys",
            "image" => "product1.png",
            "description" => "Produtos para buffet e parques",
            "folder" => "Criatoys",
            "list" => array(
                array(
                    "title" => "Laser Web",
                    "image" => array(
                        "0/0.jpg",
                        "0/1.jpg",
                        "0/2.jpg",
                        "0/3.jpg"
                    ),
                    "description" => array(
                        "A teia é forma por oito feixes de raios lasers na cor verde. Os emissores de lasers são acondicionados em quatro totens independentes e são articulados. Os feixes são projetados em outros quatro totens receptores que acusam a incidência e a ausência dos raios. Todos estes emissores, como os sensores, são controlados por uma placa digital microprocessada, além de gerenciar um display digital e a sonorização. A teia da LASERWEB pode ser mudada a qualquer tempo, pelo próprio cliente. Bastam apenas dois minutos para reposicionar os feixes de laser. A teia fornece uma proteção para evitar que as crianças olhem diretamente para o feixe.",
                        "Qualquer laser produz uma luz pontual cujo raio é invisível. Para que o raio seja visível é necessário que o cliente coloque uma máquina de fumaça, não fornecida pela Criatoys. (Pode ser montado de acordo com seu espaço)",
                    ),
                    "caption" => "Medidas: Totens com 2m de altura, 0,1m de profundidade e 0,1m de largura. Totem central com 2m de altura, 0,3m de largura e 0,3m de profundidade"
                ),
                array(
                    "title" => "Shot Fun",
                    "image" => array(
                        "1/0.jpg",
                        "1/1.jpg",
                        "1/2.jpg",
                        "1/3.jpg",
                        "1/4.jpg",
                        "1/5.jpg",
                        "1/6.jpg",
                        "1/7.jpg",
                        "1/8.jpg"
                    ),
                    "description" => array(
                        "A arma tem desenho único, é confeccionada em plástico e presa ao colete através de um multicabo flexível. O colete, de tamanho único, é confeccionado em Nylon, polietileno e acrílico, com quatro sensores, sendo dois posicionados nos ombros, um na frente e outro nas costas do colete. Cada sensor possui um led, indicador de alvo, nas cores: vermelho, amarelo, verde e azul (quatro equipes). Produz um efeito sonoro cada vez que é atingido. No início do jogo, cada participante recebe dezesseis vidas, e quando estas vidas terminam, um som intermitente é acionado e os leds do colete piscam sem parar, até que este participante deixe a Arena e devolva o equipamento ao monitor, que fará o reset. Acompanha carregador de bateria e bateria extra."
                    ),
                    "caption" =>    "Medidas: Tamanho único<br>
                                    Cor do colete: Preto<br>
                                    Leds nas cores: Azul, vermelho, amarelo, verde<br>
                                    Peso: 2kgs"
                ),
                array(
                    "title" => "Nervoteste",
                    "image" => array(
                        "2/0.jpg",
                        "2/1.jpg"
                    ),
                    "description" => array(
                        "O participante deverá percorrer um caminho sinuoso, com uma argola de metal, sem encostar no mesmo. Se encostar, a máquina toca um som divertido e o participante perde. Caso ele consiga percorrer todo o caminho, a máquina toca uma musica da vitória. Possui três níveis de dificuldades, deixando a brincadeira mais competitiva.",
                    ),
                    "caption" =>    "Medidas: 1,2m de altura, 1,2m de largura e 0,2m de profundidade<br>
                                    Peso: 20kgs<br><br>
                                    *Tamanho pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Painéis Interativos",
                    "image" => array(
                        "3/0.jpg",
                        "3/1.jpg",
                        "3/2.jpg",
                        "3/3.jpg",
                        "3/4.jpg",
                        "3/5.jpg",
                        "3/6.jpg",
                        "3/7.jpg",
                        "3/8.jpg",
                        "3/9.jpg",
                    ),
                    "description" => array(
                        "Painel com imagens, luzes sons, para crianças de 2 a 5 anos. Ao apertarem os botões serão reproduzidos os sons correspondentes aos personagens: animais, veículos, instrumentos musicais e outros. Excelente opção para a área baby. Além de ser uma atração é também um brinquedo educativo e decorativo.",
                        "Opções: Fazendinha, Galáxia e Fundo do Mar"
                    ),
                    "caption" =>    "Medidas: 1,35m de altura, 1,5m de largura e 0,08m de profundidade<br>
                                    Peso: 20kgs<br><br>
                                    *Tamanho pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Braço de Ferro",
                    "image" => array(
                        "4/0.jpg",
                        "4/1.jpg",
                        "4/2.jpg",
                    ),
                    "description" => array(
                        "Brincadeira divertida para adolescentes e adultos, homens e mulheres.",
                        "Teste sua força disputando uma partida contra a máquina e descubra se é capaz de vencê-la. A máquina possui ajuste de altura do braço e pode ser usada por destros e canhotos. Apresenta também regulagem de força, sons e luzes que completam a brincadeira."
                    ),
                    "caption" =>    "Medidas: 1,5m de altura, 0,9m de largura e 0,9m de profundidade<br>
                                    Peso: 100kgs"
                ),
                array(
                    "title" => "Trenzinho",
                    "image" => array(
                        "5/0.jpg",
                        "5/1.jpg",
                        "5/2.jpg",
                        "5/3.jpg",
                        "5/4.jpg",
                        "5/5.jpg",
                        "5/6.jpg",
                        "5/7.jpg",
                        "5/8.jpg",
                        "5/9.jpg",
                    ),
                    "description" => array(
                        "Excelente atração para quatro crianças até quatro anos, composta de um trenzinho em fibra de vidro com acabamento automotivo e pintura artística, com muitas luzes e sons. A locomotiva puxa três vagões e anda sobre trilhos metálicos em um percurso oval de 3m de comprimento e 2m de largura.",
                        "Emite som de trem de verdade e luzes."
                    ),
                    "caption" =>    "Medidas do trilho: 3m x 2m<br>
                                    Peso: 250kgs<br><br>
                                    *Tamanho do trilho pode se adequar à necessidade do cliente bem como o número de vagões"
                ),
                array(
                    "title" => "Wild Step",
                    "image" => array(
                        "6/0.jpg",
                        "6/1.jpg",
                        "6/2.jpg",
                        "6/3.jpg",
                        "6/4.jpg",
                    ),
                    "description" => array(
                        "Brincadeira de muita ação. Pais e filhos interagem em uma corrida frenética para alcançar a vitória. Nesta brincadeira, vence quem levar o seu macaquinho até o topo do coqueiro em primeiro lugar. Uma deliciosa música é tocada no jogo e quando um dos macaquinhos chega ao topo os outros param, além de disparar um giroflex.",
                        "A capacidade é de 100kgs por participante."
                    ),
                    "caption" =>    "Medidas: 3m de altura e 1,7m de diâmetro<br>
                                    Peso: 100kgs<br><br>
                                    *Tamanho pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Martelo de Força",
                    "image" => array(
                        "7/0.jpg",
                        "7/1.jpg",
                        "7/2.jpg",
                        "7/3.jpg",
                        "7/4.jpg",
                        "7/5.jpg",
                        "7/6.jpg",
                        "7/7.jpg",
                        "7/8.jpg",
                        "7/9.jpg",
                        "7/10.jpg",
                        "7/11.jpg",
                        "7/12.jpg",
                        "7/13.jpg",
                        "7/14.jpg",
                        "7/15.jpg",
                        "7/16.jpg",
                        "7/17.jpg",
                        "7/18.jpg",
                        "7/19.jpg",
                        "7/20.jpg",
                        "7/21.jpg",
                    ),
                    "description" => array(
                        "Mede a força do participante. Possui display digital, luzes e sons."
                    ),
                    "caption" =>    "Medidas: 2,5m de altura, 0,7m de largura e 1m de profundidade<br>
                                    Peso: 60kgs"
                ),
                array(
                    "title" => "Super Memória",
                    "image" => array(
                        "8/0.jpg",
                        "8/1.jpg",
                        "8/2.jpg",
                        "8/3.jpg",
                        "8/4.jpg",
                        "8/5.jpg",
                        "8/6.jpg",
                        "8/7.jpg",
                        "8/8.jpg",
                        "8/9.jpg",
                    ),
                    "description" => array(
                        "Quem não se lembra do famos Genius? Pois o Super Memória é uma versão turbinada da velha brincadeira de memória. Além de emitir sons, o Super Memória acende luzes coloridas e mostra ao jogador, em um display digital, o nível em que se encontra, além de possuir três níveis de dificuldades: fácil, médio e difícil. Pode ser personalizado com duas cores."
                    ),
                    "caption" =>    "Supermemória:<br>
                                    Medidas: 1,1m de altura, 0,7m de largura e 0,5m de profundidade<br>
                                    Peso: 40kgs<br><br>
                                    Supermemória:<br>
                                    Medidas: 1,1m de diâmetro e 0,15m de profundidade<br>
                                    Peso: 20kgs<br><br>
                                    *Tamanhos pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Jogo da Velha",
                    "image" => array(
                        "9/0.jpg",
                        "9/1.jpg",
                        "9/2.jpg",
                    ),
                    "description" => array(
                        "O antigo jogo da velha agora em uma versão turbinada. Você joga contra a máquina, e precisa ser rápido nas decisões para conseguir vencer este desafio. Divertido jogo, em que pais e filhos brincam. Possui sons e luzes."
                    ),
                    "caption" =>    "Jogo da Velha<br>
                                    Medidas: 1,2m de altura, 0,8m de largura e 0,6m de profundidade<br>
                                    Peso: 20kgs<br><br>
                                    Jogo da Velha de Parede<br>
                                    Medidas: 1,10m de diâmetro e 0,15m de profundidade<br>
                                    Peso: 20kgs"
                ),
                array(
                    "title" => "Área Baby",
                    "image" => array(
                        "10/0.jpg",
                        "10/1.jpg",
                        "10/2.jpg",
                    ),
                    "description" => array(
                        "RobôBaby<br>
                        Brinquedo para áreas Baby. Atende às crianças de 2 a 5 anos, ensinando cores, formas e números, através de sons e luzes.",
                        "PlayBaby<br>
                        São seis brincadeiras em um só jogo: Sons de carros, veículos, animais, números e letras, instrumentos musicais e espaciais. Divertido, educativo, pedagógico. Ensina e diverte os pequenos estimulando a imaginação e curiosidade.",
                        "Painéis Interativos<br>
                        Painel com imagens, luzes sons, para crianças de 2 a 5 anos. Ao apertarem os botões serão reproduzidos os sons correspondentes aos personagens: animais, veículos, instrumentos musicais e outros. Excelente opção para a área baby. Além de ser uma atração é também um brinquedo educativo e decorativo.",
                        "Opções: Fazendinha, Galáxia e Fundo do Mar"
                    ),
                    "caption" =>    "RobôBaby<br>
                                    Medidas: 0,6m de altura, 0,35m de largura e 0,4m de profundidade<br>
                                    Peso: 8kgs<br><br>
                                    PlayBaby<br>
                                    Medidas: 0,8m de diâmetro e 0,35m de altura<br>
                                    Peso: 3kgs<br><br>
                                    Painéis Interativos<br>
                                    Medidas: 1,35m de altura, 1,5m de largura e 0,08m de profundidade<br>
                                    Peso: 20kgs<br><br>
                                    *Tamanho pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Robôs",
                    "image" => array(
                        "11/0.jpg",
                        "11/1.jpg",
                        "11/2.jpg",
                        "11/3.jpg",
                        "11/4.jpg",
                        "11/5.jpg",
                        "11/6.jpg",
                        "11/7.jpg",
                        "11/8.jpg",
                        "11/9.jpg",
                        "11/10.jpg",
                        "11/11.jpg",
                        "11/12.jpg",
                        "11/13.jpg",
                        "11/14.jpg",
                        "11/15.jpg",
                        "11/16.jpg",
                        "11/17.jpg",
                        "11/18.jpg",
                        "11/19.jpg",
                        "11/20.jpg",
                    ),
                    "description" => array(
                        "O Robô Jr.<br>
                        está fazendo enorme sucesso junto ao público infantil e adulto. Ele anda em todas as direções, toca músicas através de rádio-CD player, acende luzes com efeitos, acende os olhos demonstrando emoções e fala com as pessoas através de um microfone sem fio. Pelo seu tamanho reduzido (80 cm de altura) o Robô Jr. circula facilmente pelo Buffet, sem precisar ter um espaço próprio para isto. Confeccionado em fibra de vidro com pintura e acabamento automotivo, pode ser pintado com as cores de seu Buffet. Possui controle remoto sem fio de quatro canais, microfone sem fio, radio cd player, carregador de bateria e bateria com autonomia de 6 horas.",
                        "Robô Monitor<br>
                        Equipamento de grande dinâmica. Anda em todas as direções, toca músicas através de rádio CD player, acende luzes com efeitos, acende os olhos demonstrando emoções e fala com as pessoas através de microfone sem fio. O operador que controla o equipamento tem à sua disposição um rádio controle e um transmissor VHF para poder dar “vida” ao robô, interagindo com as pessoas e tornando a festa um grandioso espetáculo. Confeccionado em fibra de vidro e alumínio com pintura e acabamento automotivo. Possui controle remoto de quatro canais, microfone sem fio, radio cd player, carregador de bateria e bateria com autonomia de 6 horas."
                    ),
                    "caption" =>    "Robô Junior<br>
                                    Medidas: 0,8m de altura e 0,4m de largura<br>
                                    Peso: 35kgs<br><br>
                                    Robô Monitor<br>
                                    Medidas: 1,1m de altura e 0,45m de largura<br>
                                    Peso: 55kgs"
                ),
                array(
                    "title" => "Máquina de Parabéns",
                    "image" => array(
                        "12/0.jpg",
                        "12/1.jpg",
                        "12/2.jpg",
                        "12/3.jpg",
                        "12/4.jpg",
                        "12/5.jpg",
                        "12/6.jpg",
                        "12/7.jpg",
                        "12/8.jpg",
                        "12/9.jpg",
                        "12/10.jpg",
                        "12/11.jpg",
                        "12/12.jpg",
                        "12/13.jpg",
                        "12/14.jpg",
                        "12/15.jpg",
                        "12/16.jpg",
                        "12/17.jpg",
                        "12/18.jpg",
                    ),
                    "description" => array(
                        "Qual é o momento mais esperado numa festa de aniversário? Se você respondeu “O parabéns” então acertou e é nesta hora que a criança se sente mais importante. Por este motivo nós não poupamos esforço para idealizar uma máquina tão atrativa.",
                        "A Máquina de Parabéns da CRIATRONIC é a única totalmente automática. Ela faz a contagem regressiva a partir do 10 e, quando chega ao 1, as luzes se acendem, há a liberação de fumaça e a porta se abre, revelando o aniversariante que se encontra no interior da máquina."
                    ),
                    "caption" =>    "Medidas: 1,4m de largura, 1,4m de profundidade e 2,5m de altura<br>
                                    Peso: 250kgs"
                ),
                array(
                    "title" => "Acerte o Alvo",
                    "image" => array(
                        "13/0.jpg",
                        "13/1.jpg",
                        "13/2.jpg",
                        "13/3.jpg",
                        "13/4.jpg",
                        "13/5.jpg",
                        "13/6.jpg",
                        "13/7.jpg",
                    ),
                    "description" => array(
                        "Jogo de habilidade e velocidade, entre dois participantes, acionado por pistolas laseres. Para marcar pontos, os jogadores deverão acertar somente onde as luzes piscam, no momento certo. E tudo isso com o tempo correndo. Quem acertar mais alvos quando estiverem iluminados ganha mais pontos."
                    ),
                    "caption" =>    "Medidas: 1,8m de altura, 1,2m de largura e 1,4m de profundidade<br>
                                    Peso: 150kgs"
                ),
                array(
                    "title" => "Pintura Mágica",
                    "image" => array(
                        "14/0.jpg",
                        "14/1.jpg",
                        "14/2.jpg",
                        "14/3.jpg",
                    ),
                    "description" => array(
                        "Divertida brincadeira para crianças que pintam pequenas obras de arte em papel cartão, com bisnagas de tinta. Excelente opção para os pequenos levarem de lembrança da festa. Alimentador de tintas manual. Possui um tambor com aplicação de adesivos e pintura e encaixe de papel. O monitor ou a criança coloca o papel no interior da maquina. Apertando um botão, o papel gira por um tempo pré determinado. Neste período, a criança joga no papel, com uma pequena bisnaga, tintas de diversas cores, produzindo efeitos impares. Após a secagem da tinta a moldura é grampeada e está pronta a obra de arte."
                    ),
                    "caption" =>    "Medidas: 1,2m de altura e 1m de diâmetro<br>
                                    Peso: 50kgs"
                ),
                array(
                    "title" => "Piso Musical",
                    "image" => array(
                        "15/0.jpg",
                        "15/1.jpg",
                        "15/2.jpg",
                        "15/3.jpg",
                    ),
                    "description" => array(
                        "Sensacional brincadeira para toda a família. Basta pisar sobre as teclas e sair dando passos para direita e esquerda, e com um pouco de conhecimento em música extrair uma melodia.",
                        "Pode ser construído em formas e tamanhos diferentes, para se encaixar naquele espaço pouco utilizado em seu evento."
                    ),
                    "caption" =>    "Medidas: 2,5m de largura, 0,5m de profundidade e 0,15m altura<br>
                                    Peso: 80kgs<br<br>
                                    *Tamanho pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Supermini Golfe",
                    "image" => array(
                        "16/0.jpg",
                        "16/1.jpg",
                        "16/2.jpg",
                    ),
                    "description" => array(
                        "Brincadeira que vai encantar as crianças e adultos. Este Super Mini Golfe tem marcação de pontuação e tempo. A cada acerto o jogador recebe mais ou menos pontos, dependendo da distância do buraco. Além disto, o Super Mini Golfe emite sons diferentes a cada acerto e acende, no painel principal, a quantidade de pontos ganhos no acerto. O recorde do dia fica gravado no display."
                    ),
                    "caption" =>    "Medidas: 2,75m de comprimento, 1,5m de largura e 1,37m de altura<br>
                                    Peso: 150kgs<br><br>
                                    *Tamanho pode se adequar à necessidade do cliente"
                )
            )
        ),
        1 => array(
            "title" => "Criatronic",
            "image" => "product2.png",
            "description" => "Produtos para promoções, eventos e PDV",
            "folder" => "Criatronics",
            "list" => array(
                array(
                    "title" => "Nervoteste",
                    "image" => array(
                        "0/0.jpg",
                        "0/1.jpg",
                    ),
                    "description" => array(
                        "O participante deverá percorrer um caminho sinuoso, com uma argola de metal, sem encostar no mesmo. Se encostar, a máquina toca um som divertido e o participante perde. Caso ele consiga percorrer todo o caminho, a máquina toca uma musica da vitória. Possui três níveis de dificuldades, deixando a brincadeira mais competitiva.",
                    ),
                    "caption" =>    "Medidas: 1,2m de altura, 1,2m de largura e 0,2m de profundidade<br>
                                    Peso: 20kgs<br><br>
                                    *Tamanho pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Martelo de Força",
                    "image" => array(
                        "1/0.jpg",
                        "1/1.jpg",
                        "1/2.jpg",
                        "1/3.jpg",
                        "1/4.jpg",
                        "1/5.jpg",
                        "1/6.jpg",
                        "1/7.jpg",
                        "1/8.jpg",
                        "1/9.jpg",
                        "1/10.jpg",
                        "1/11.jpg",
                        "1/12.jpg",
                        "1/13.jpg",
                        "1/14.jpg",
                        "1/15.jpg",
                        "1/16.jpg",
                        "1/17.jpg",
                        "1/18.jpg",
                        "1/19.jpg",
                        "1/20.jpg",
                        "1/21.jpg",
                    ),
                    "description" => array(
                        "Mede a força do participante. Possui display digital, luzes e sons."
                    ),
                    "caption" =>    "Medidas: 2,5m de altura, 0,7m de largura e 1m de profundidade<br>
                                    Peso: 60kgs"
                ),
                array(
                    "title" => "Super Memória",
                    "image" => array(
                        "2/0.jpg",
                        "2/1.jpg",
                        "2/2.jpg",
                        "2/3.jpg",
                        "2/4.jpg",
                        "2/5.jpg",
                        "2/6.jpg",
                        "2/7.jpg",
                        "2/8.jpg",
                        "2/9.jpg",
                    ),
                    "description" => array(
                        "Quem não se lembra do famos Genius? Pois o Super Memória é uma versão turbinada da velha brincadeira de memória. Além de emitir sons, o Super Memória acende luzes coloridas e mostra ao jogador, em um display digital, o nível em que se encontra, além de possuir três níveis de dificuldades: fácil, médio e difícil. Pode ser personalizado com duas cores."
                    ),
                    "caption" =>    "Supermemória:<br>
                                    Medidas: 1,1m de altura, 0,7m de largura e 0,5m de profundidade<br>
                                    Peso: 40kgs<br><br>
                                    Supermemória:<br>
                                    Medidas: 1,1m de diâmetro e 0,15m de profundidade<br>
                                    Peso: 20kgs<br><br>
                                    *Tamanhos pode se adequar à necessidade do cliente"
                ),
                array(
                    "title" => "Boxmania",
                    "image" => array(
                        "3/0.jpg",
                        "3/1.jpg",
                        "3/2.jpg",
                    ),
                    "description" => array(
                        "A tradicional máquina de soco agora de uma forma mais segura, sem as travessas de aço que podem provocar acidentes, com o sistema de pêra teto-solo. Marca recorde, tem sonorização e ajuste de força."
                    ),
                    "caption" =>    "Medidas: 2,2m altura, 0,7m de largura, 1,2m de profundidade<br>
                                    Peso: 60kgs"
                ),
                array(
                    "title" => "Mini Turbilhão",
                    "image" => array(
                        "4/0.jpg",
                        "4/1.jpg",
                        "4/2.jpg",
                    ),
                    "description" => array(
                        "Sorteador portátil de mesa. O cliente deverá retirar um dos papéis que estão no “turbilhão de vento” e torcer para que este papel esteja sorteado."
                    ),
                    "caption" =>    "Medidas: 0,6m de altura, 0,4m de largura, 0,4m de profundidade<br>
                                    Peso: 12kgs"
                ),
                array(
                    "title" => "Bate-Ganha",
                    "image" => array(
                        "5/0.png"
                    ),
                    "description" => array(
                        "Muito utilizado nas brincadeiras de perguntas e resposta, o Bate-Ganha pode ser jogado por seis pessoas. Após a pergunta ser efetuada, o jogador que pressionar o botão mais rapidamente tem o direito à resposta. O Bate-Ganha é também utilizado em gincanas e programas de Quiz."
                    ),
                    "caption" =>    "Medidas: pode se adequar à necessidade do cliente"
                ),
            )
        ),
        2 => array(
            "title" => "Personalizado",
            "image" => "product3.png",
            "description" => "Produtos customizados de clientes",
            "folder" => "Personalizado",
            "list" => array(
                array(
                    "title" => "Nokia",
                    "image" => array(
                        "0/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Wizard",
                    "image" => array(
                        "1/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Nokia",
                    "image" => array(
                        "2/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Toddynho",
                    "image" => array(
                        "3/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "",
                    "image" => array(
                        "4/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Fábrica da Alegria",
                    "image" => array(
                        "5/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Lé com Cré",
                    "image" => array(
                        "6/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Fábrica da Alegria",
                    "image" => array(
                        "7/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Pullman",
                    "image" => array(
                        "8/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Pernambucanas",
                    "image" => array(
                        "9/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "",
                    "image" => array(
                        "10/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "",
                    "image" => array(
                        "11/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Devassa",
                    "image" => array(
                        "12/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                ),
                array(
                    "title" => "Pullman",
                    "image" => array(
                        "13/0.png"
                    ),
                    "description" => array(
                    ),
                    "caption" => ""
                )
            )
        )
    );
}
?>