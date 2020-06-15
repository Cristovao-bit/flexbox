<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Hotel Paraíso | Flexbox - Projeto</title>
        <link rel="stylesheet" href="_css/reset.css"/>
        <link rel="stylesheet" href="_css/icons.css"/>
    </head>
    <body>
        <header>
            <a href="#!">
                <img title="Hotel Paraíso" alt="[Hotel Paraíso]" src="_img/logo.png"/>
            </a>
            
            <ul>
                <li><a href="#!">Home</a></li>
                <li><a href="#!">Sobre</a></li>
                <li><a href="#!">Reservas</a></li>
                <li><a href="#!">Contato</a></li>
            </ul>
        </header>
        
        <section class="hero">
            <h1>Conheça este paraíso chamado Itacaré</h1>
            <h3>"Aconchego, conforto, simpatia e alto astral"</h3>
            <a href="#!" class="btn">Saiba Mais</a>
        </section>
        
        <section class="conheca-o-hotel">
            <h3>Conheça o Hotel Paraíso</h3>
            <p>Feche os olhos e imagine o  paraíso. Um lugar no meio da Mata Atlântica e banhado pelo
            mar, onde você encontra paz, tranquilidade, conforto e comodidade.</p>
            <hr>
            <ul class="grid">
                <li class="small" style="background-image: url(_img/itacare-01.jpg);"></li>
                <li class="large" style="background-image: url(_img/itacare-02.jpg);"></li>
                <li class="large" style="background-image: url(_img/itacare-03.jpg);"></li>
                <li class="small" style="background-image: url(_img/itarace-04.jpg);"></li>
            </ul>
        </section>
        
        <section class="caracteristicas">
            <h3>Único hotel pé na areia de Itacaré</h3>
            <p>Implantando em uma área completamente arborizada, o Hotel Paraíso é o único hotel pé
            na área de itacaré. Aqui o Mar será o seu companheiro e você terá as belezas da natureza
            como</p>
            <hr>
            <ul class="grid">
                <li>
                    <i class="icon-location"></i>
                    <h4>Localização</h4>
                    <p>Localizada no sul da Bahia, entre o mar e a Mata Atlântica, Itacaré tem resfrescante
                    cachoeiras e praias belíssimas, muitas delas tão pequenas que nem parecem nos mapas.</p>
                </li>
                
                <li>
                    <i class="icon-info"></i>
                    <h4>Pacotes e Ofertas</h4>
                    <p>Sabe aquele descontraído encontro com a família e amigos? Ou um momento relax? Nossa
                        com uma diversidade de espaços que propocionam momentos inesquecíveis.</p>
                </li>
                
                <li>
                    <i class="icon-home"></i>
                    <h4>Acomodações</h4>
                    <p>Hotel Paraíso possui 29 unidades, divididas entre 11 chalés, 16 amplas suítes e 2
                    todas com TV a cabo, frigobar, além de varanda com rede.</p>
                </li>
            </ul>
        </section>
        
        <section class="newsletter">
            <h3>Newsletter</h3>
            <p>Assine nossa newsletter para se manter atualizado com nossos serviços e a programação de 
            culturais.</p>
            <hr>
            
            <form method="post" action="">
                <input type="email" placeholder="Informe seu Email"/>
                <button>Cadastrar</button>
            </form>
        </section>
        
        <footer>
            <ul>
                <li><a href="#!"><i class="icon-laptop"></i></a></li>
                <li><a href="#!"><i class="icon-laptop"></i></a></li>
                <li><a href="#!"><i class="icon-laptop"></i></a></li>
                <li><a href="#!"><i class="icon-laptop"></i></a></li>
            </ul>
            <p>Todos os direitos reservados - Hotel Paraíso 2023</p>
        </footer>
    </body>
</html>
