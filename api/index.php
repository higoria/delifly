<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/luckiest-guy" rel="stylesheet">
  <link rel="stylesheet" href="src/css/imports.css">
  <title>Delivery</title>
</head>

<body>

  <header class="section headerconteiner">
    <nav class="navconteiner">
      <h1 class="h1Style h1Logo">Deli<span class="spanLogo">Fly</span></h1>
      <ul class="ulNav">
        <a href="" class="aNav">
          <li>Home</li>
        </a>
        <a href="" class="aNav">
          <li>Ofertas Especiais</li>
        </a>
        <a href="" class="aNav">
          <li>Restaurantes</li>
        </a>
        <li class="cart">Carrinho</li>
        <div class="divLogin">
          <a class="loginBtn">
            <img src="src/imgs/login.png" alt="">
            <li class="li-login">
              <?php
              if (isset($_SESSION['nomeUsuario'])) {
                echo $_SESSION['nomeUsuario'];
              } else {
                echo "Login/Cadastrar";
              }
              ?>
            </li>
          </a>
        </div>
      </ul>
      <div class="btn-menu">
        <label class="hamburger">
          <input type="checkbox">
          <svg viewBox="0 0 32 32">
            <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
            <path class="line" d="M7 16 27 16"></path>
          </svg>
        </label>
      </div>
    </nav>
  </header>

  <section class="sectionBanner section">
    <img class="bannerIMG" src="src/imgs/banner.png" alt="">
  </section>

  <section class="promoçoes section">
    <div class="promoçoesDIV">
      <h1>Todas as ofertas do Deli<span class="spanLogo">Fly</span></h1>
      <div class="carroselItens">
        <ul class="items">
          <li>Ofertas</li>
          <li>Hambúrgueres</li>
          <li>Fritas</li>
          <li>Saladas</li>
          <li>Bebidas Frias</li>
          <li>Refeição Feliz</li>
          <li>Sobremesas</li>
          <li>Bebidas Quentes</li>
          <li>Molhos</li>
          <li>Café</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="carrosel-imgs section">
    <div class="img01">
      <img class="imgs-carrosel" src="src/imgs/carrosel01.svg" alt="" width="500px">
    </div>
    <div class="img02">
      <img class="imgs-carrosel" src="src/imgs/carrosel02.svg" alt="" width="500px">
    </div>
    <div class="img03">
      <img class="imgs-carrosel" src="src/imgs/carrosel03.svg" alt="" width="500px">
    </div>
  </section>

  <section class="burgers section">
    <div class="burgers-section-conteiner">
      <h1>Hambúrgueres</h1>
      <div class="sanduiches-geral">

        <div class="divs-sanduiches sanduba01">
          <div class="div-disc-geral">
            <h3 class="nome-geral nome-geral-js">Combo Bacon Turbo</h3>
            <p class="disc-geral">Hambúrguer Bacon turbo, 1 Batata frita grande, 1 Cola cola 600ML</p>
            <h3 class="valor-geral valor-js">R$ 32,50</h3>
            <a class="btn-pedir pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-sanduba">
            <img class="img-product-js" src="src/imgs/burguer1.svg" alt="">
          </div>
        </div>

        <div class="divs-sanduiches sanduba02">
          <div class="div-disc-geral">
            <h3 class="nome-geral nome-geral-js">Combo Trivial</h3>
            <p class="disc-geral">Hambúrguer com 160g de carne, 1 Batata frita media, 1 Cola cola 600ML</p>
            <h3 class="valor-geral valor-js">R$ 29,99</h3>
            <a class="btn-pedir pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-sanduba">
            <img class="img-product-js" src="src/imgs/burguer2.svg " alt="">
          </div>
        </div>

        <div class="divs-sanduiches sanduba03">
          <div class="div-disc-geral">
            <h3 class="nome-geral nome-geral-js">Combo Gulas</h3>
            <p class="disc-geral">Hambúrguer com 3x hambúrguer, 1 Batata frita pequena, 1 Cola cola lata</p>
            <h3 class="valor-geral valor-js">R$ 38,30</h3>
            <a class="btn-pedir pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-sanduba">
            <img class="img-product-js" src="src/imgs/burguer3.svg" alt="">
          </div>
        </div>

        <div class="divs-sanduiches sanduba04">
          <div class="div-disc-geral">
            <h3 class="nome-geral nome-geral-js">Combo muita fome</h3>
            <p class="disc-geral">Hambúrguer Bacon duplo é hamburguer duplo, 1 Batata frita grande, 1 Guarana 1L</p>
            <h3 class="valor-geral valor-js">R$ 41,50</h3>
            <a class="btn-pedir pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-sanduba">
            <img class="img-product-js" src="src/imgs/burguer4.svg" alt="">
          </div>
        </div>

        <div class="divs-sanduiches sanduba05">
          <div class="div-disc-geral">
            <h3 class="nome-geral nome-geral-js">Combo Costela</h3>
            <p class="disc-geral">Hambúrguer com 160g de Costela premium, 1 Batata frita grande, 1 Cola cola 600ML</p>
            <h3 class="valor-geral valor-js">R$ 36,50</h3>
            <a class="btn-pedir pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-sanduba">
            <img class="img-product-js" src="src/imgs/burguer5.svg" alt="">
          </div>
        </div>

        <div class="divs-sanduiches sanduba06">
          <div class="div-disc-geral">
            <h3 class="nome-geral nome-geral-js">Combo Frango</h3>
            <p class="disc-geral">Hambúrguer com 160g de frango, 1 Batata frita media, 1 Cola cola lata</p>
            <h3 class="valor-geral valor-js">R$ 28,20</h3>
            <a class="btn-pedir pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-sanduba">
            <img class="img-product-js" src="src/imgs/burguer6.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fritas section">
    <div class="fritas-section-conteiner">
      <h1>Fritas</h1>
      <div class="fritas-geral">

        <div class="divs-fritas fritas01">
          <div class="div-disc-geral-fritas">
            <h3 class="nome-geral-fritas nome-geral-js">Porção de pasteis</h3>
            <p class="disc-geral-fritas">Contem 30 unidades de pasteis crocantes.</p>
            <h3 class="valor-geral-fritas valor-js">R$ 25,10</h3>
            <a class="btn-pedir-fritas pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-fritas">
            <img class="img-product-js" src="src/imgs/fritas1.svg" alt="">
          </div>
        </div>

        <div class="divs-fritas fritas02">
          <div class="div-disc-geral-fritas">
            <h3 class="nome-geral-fritas nome-geral-js">Batata Frita Max</h3>
            <p class="disc-geral-fritas">Uma porçao de batata com bacon é cheddar</p>
            <h3 class="valor-geral-fritas valor-js">R$ 35,99</h3>
            <a class="btn-pedir-fritas pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-fritas">
            <img class="img-product-js" src="src/imgs/fritas2.svg" alt="">
          </div>
        </div>

        <div class="divs-fritas fritas03">
          <div class="div-disc-geral-fritas">
            <h3 class="nome-geral-fritas nome-geral-js">Balde de queijos</h3>
            <p class="disc-geral-fritas">Um balde delicioso contendo diversos tipos de queijos.</p>
            <h3 class="valor-geral-fritas valor-js">R$ 31,30</h3>
            <a class="btn-pedir-fritas pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-fritas">
            <img class="img-product-js" src="src/imgs/fritas3.svg" alt="">
          </div>
        </div>

        <div class="divs-fritas fritas04">
          <div class="div-disc-geral-fritas">
            <h3 class="nome-geral-fritas nome-geral-js">Combo Supremo</h3>
            <p class="disc-geral-fritas">Um combo de frango frito com fritas extremamente crocantes.</p>
            <h3 class="valor-geral-fritas valor-js">R$ 41,50</h3>
            <a class="btn-pedir-fritas pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-fritas">
            <img class="img-product-js" src="src/imgs/fritas4.svg" alt="">
          </div>
        </div>

        <div class="divs-fritas fritas05">
          <div class="div-disc-geral-fritas">
            <h3 class="nome-geral-fritas nome-geral-js">Cebolas Gargamel</h3>
            <p class="disc-geral-fritas">Um combo de cebolas fritas,contendo 30unidades.</p>
            <h3 class="valor-geral-fritas valor-js">R$ 33,50</h3>
            <a class="btn-pedir-fritas pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-fritas">
            <img class="img-product-js" src="src/imgs/fritas5.svg" alt="">
          </div>
        </div>

        <div class="divs-fritas fritas06">
          <div class="div-disc-geral-fritas">
            <h3 class="nome-geral-fritas nome-geral-js">Fritas</h3>
            <p class="disc-geral-fritas">Batatas simples para quem ta com pouca fome.</p>
            <h3 class="valor-geral-fritas valor-js">R$ 21,20</h3>
            <a class="btn-pedir-fritas pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-fritas">
            <img class="img-product-js" src="src/imgs/fritas6.svg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="drinks section">
    <div class="drinks-section-conteiner">
      <h1>Drinks</h1>
      <div class="drinks-geral">

        <div class="divs-drinks drinks01">
          <div class="div-disc-geral-drinks">
            <h3 class="nome-geral-drinks nome-geral-js">Batida de maça verde</h3>
            <p class="disc-geral-drinks">Contendo alcool, para deixar sua noite mais animada.</p>
            <h3 class="valor-geral-drinks valor-js">R$ 19,10</h3>
            <a class="btn-pedir-drinks pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-drinks">
            <img class="img-product-js" src="src/imgs/drink1.svg" alt="">
          </div>
        </div>

        <div class="divs-drinks drinks02">
          <div class="div-disc-geral-drinks">
            <h3 class="nome-geral-drinks nome-geral-js">Chá verde</h3>
            <p class="disc-geral-drinks">Nada melhor do que um chá gelado.</p>
            <h3 class="valor-geral-drinks valor-js">R$ 15,99</h3>
            <a class="btn-pedir-drinks pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-drinks">
            <img class="img-product-js" src="src/imgs/drink2.svg" alt="">
          </div>
        </div>

        <div class="divs-drinks drinks03">
          <div class="div-disc-geral-drinks">
            <h3 class="nome-geral-drinks nome-geral-js">Aperol</h3>
            <p class="disc-geral-drinks">O melhor drink para relaxar na noite crua.</p>
            <h3 class="valor-geral-drinks valor-js">R$ 26,30</h3>
            <a class="btn-pedir-drinks pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-drinks">
            <img class="img-product-js" src="src/imgs/drink3.svg" alt="">
          </div>
        </div>

        <div class="divs-drinks drinks04">
          <div class="div-disc-geral-drinks">
            <h3 class="nome-geral-drinks nome-geral-js">Pina Colada</h3>
            <p class="disc-geral-drinks">Uma mistura entre abacaxi e leite condensado.</p>
            <h3 class="valor-geral-drinks valor-js">R$ 22,50</h3>
            <a class="btn-pedir-drinks pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-drinks">
            <img class="img-product-js" src="src/imgs/drink4.svg" alt="">
          </div>
        </div>

        <div class="divs-drinks drinks05">
          <div class="div-disc-geral-drinks">
            <h3 class="nome-geral-drinks nome-geral-js">Drink Gargamel</h3>
            <p class="disc-geral-drinks">Uma mistura entre gengibre e whisky.</p>
            <h3 class="valor-geral-drinks valor-js">R$ 33,50</h3>
            <a class="btn-pedir-drinks pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-drinks">
            <img class="img-product-js" src="src/imgs/drink5.svg" alt="">
          </div>
        </div>

        <div class="divs-drinks drinks06">
          <div class="div-disc-geral-drinks">
            <h3 class="nome-geral-drinks nome-geral-js">Suco de laranja</h3>
            <p class="disc-geral-drinks">Nada melhor do que aquele suco gelado de laranja.</p>
            <h3 class="valor-geral-drinks valor-js">R$ 21,20</h3>
            <a class="btn-pedir-drinks pedir-btn-js">Pedir</a>
          </div>
          <div class="div-img-do-drinks">
            <img class="img-product-js" src="src/imgs/drink6.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="informaçoes-delivery section">
    <div class="div-info-conteiner">
      <div class="col1">
        <div class="titulo">
          <img src="src/imgs/Tracking.svg" alt="">
          <h1 class="h1-titulo-col1">Informações de Entrega</h1>
        </div>
        <div class="horarios-funcionamento">
          <h2>Segunda-Feira: <span> 20:00PM - 23:00PM</span></h2>
          <h2>Terça-Feira: <span> Fechado</span></h2>
          <h2>Quarta-Feira: <span> 20:00PM - 23:00PM</span></h2>
          <h2>Quinta-Feira: <span> 20:00PM - 23:00PM</span></h2>
          <h2>Sexta-Feira: <span> 20:00PM - 03:00AM</span></h2>
          <h2>Sabado: <span> 20:00PM - 03:00AM</span></h2>
          <h2>Domingo: <span> 20:00PM - 03:00AM</span></h2>
        </div>
      </div>

      <div class="col2">
        <div class="titulo-col2">
          <img src="src/imgs/ID Verified.svg" alt="">
          <h1 class="h1-titulo-col2">Informações de Contato</h1>
        </div>
        <div class="texto-col2">
          <p class="texto-principal">Se você tem alergias ou outras restrições alimentares, entre em contato com o restaurante. O restaurante fornecerá informações específicas sobre os alimentos mediante solicitação.</p>
          <p class="telefone">Telefone:</p>
          <p class="numero-tel">(11)-99999-44444</p>
        </div>
      </div>

      <div class="col3">
        <h1 class="h1Style h1-titulo-col3">Deli<span class="spanLogo">fly</span></h1>
        <p class="p-cidade">São Paulo - SP</p>
        <p class="endereço-col3">Rua Antonio Aparecido Barbosa, 210, Centro de São Paulo.</p>
        <h3 class="website">Site</h3>
        <p class="link">www.delifly.com</p>
      </div>
    </div>
  </section>

  <div class="bg-clientes section">
    <section class="section-clientes ">
      <h1>Avaliações dos Clientes</h1>

      <div class="conteiner-clientes">
        <div class="cliente01 clientes">
          <div class="foto-e-nome">
            <img class="selfie" src="src/imgs/selfie1.svg" alt="">
            <h3>Claudia</h3>
          </div>
          <div class="estrela">
            <img src="src/imgs/estrelas.svg" alt="">
          </div>
          <p>O aspecto positivo foi, sem dúvida, a eficiência do serviço. A fila andou rápido, a equipe foi simpática e a comida estava no padrão usual do McDonald's – quente e satisfatória.</p>
        </div>

        <div class="cliente02 clientes">
          <div class="foto-e-nome">
            <img class="selfie" src="src/imgs/selfie2.svg" alt="">
            <h3>Rafaella</h3>
          </div>
          <div class="estrela">
            <img src="src/imgs/estrelas.svg" alt="">
          </div>
          <p>Gostei muito do atendimento do motoboy,o lanche chegou super rápido é ainda estava bem quente, preço justo. A comida estava excelente.</p>
        </div>

        <div class="cliente03 clientes">
          <div class="foto-e-nome">
            <img class="selfie" src="src/imgs/selfie3.svg" alt="">
            <h3>Pedro</h3>
          </div>
          <div class="estrela">
            <img src="src/imgs/estrelas.svg" alt="">
          </div>
          <p>Nota 10, melhor combo de sanduiche que ja comi em toda a minha vida, a batata estava bem crocante é bem temperada,carne mal passada como eu queria, irei pedir novamente!</p>
        </div>
      </div>
    </section>
  </div>

  <footer class="footer-section section">

    <div class="footer-div-conteiner">
      <div class="col1-footer col-gerais">
        <h1 class="h1Style h1Logo">Deli<span class="spanLogo">Fly</span></h1>
        <img src="src/imgs/playStore.svg" alt="">
        <p>Empresa nº 490039-445, registrada na House of Companies.</p>
      </div>

      <div class="col2-footer col-gerais">
        <h1>Receba ofertas exclusivas</h1>
        <form action="" class="form-footer">
          <input type="email" placeholder="seuemailaqui@gmail.com">
          <button type="submit">Enviar</button>
        </form>
        <div class="redes-sociais">
          <img src="src/imgs/Instagram.svg" alt="">
          <img src="src/imgs/TikTok.svg" alt="">
          <img src="src/imgs/Snapchat.svg" alt="">
          <img src="src/imgs/Facebook.svg" alt="">
        </div>
      </div>

      <div class="col3-footer col-gerais">
        <h1>Termos</h1>
        <ul class="ul-geral ul-footer1">
          <a href="">
            <li>Termos e condições</li>
          </a>
          <a href="">
            <li>Privacidade</li>
          </a>
          <a href="">
            <li>Cookies</li>
          </a>
          <a href="">
            <li>Politica da empresa</li>
          </a>
        </ul>
        <img class="arrow arrow1" src="src/imgs/arrows-exchange-alt-v.svg" alt="">
      </div>

      <div class="col4-footer col-gerais">
        <h1>Links Importantes</h1>
        <ul class="ul-geral ul-footer2">
          <a href="">
            <li>Obtenha ajuda</li>
          </a>
          <a href="">
            <li>Sobre nós</li>
          </a>
          <a href="">
            <li>Criar conta comercial</li>
          </a>
          <a href="">
            <li>Trabalhe conosco</li>
          </a>
        </ul>
        <img class="arrow arrow2" src="src/imgs/arrows-exchange-alt-v.svg" alt="">
      </div>

    </div>
  </footer>

  <section class="modal-carrinho">
    <div class="modal-conteiner">
      <img class="closeX-cart" src="src/imgs/Close.svg" alt="">
      <h1 class="titulo-cart">Carrinho de compras</h1>
      <div class="tabela-conteiner">
        <table class="table">
          <tr class="especificaçao-table">
            <th>Item</th>
            <th>Preço</th>
            <th>Quantidade</th>
          </tr>
        </table>
      </div>
      <h3 class="span-aviso-cart"></h3>
      <div class="total-e-pagamento">
        <h3 class="total-cart">Total: R$ <span class="spanTotal"></span></h3>
        <div class="button-pagamento">
          <button class="button-pagament-ui" style="--clr: #00ad54;">
            <span class="button-decor"></span>
            <div class="button-content btn-no-drop">
              <div class="button__icon btn-no-drop">
                <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" width="24">
                  <circle opacity="0.5" cx="25" cy="25" r="23" fill="url(#icon-payments-cat_svg__paint0_linear_1141_21101)"></circle>
                  <mask id="icon-payments-cat_svg__a" fill="#fff">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z">
                    </path>
                  </mask>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z" fill="#fff"></path>
                  <path d="M25.958 20.962l-1.47-1.632 1.47 1.632zm2.067.109l-1.632 1.469 1.632-1.469zm-.109 2.068l-1.469-1.633 1.47 1.633zm-5.154 4.638l-1.469-1.632 1.469 1.632zm-.276 1.841l-1.883 1.13 1.883-1.13zM34.42 15.93l-2.084-.695 2.084.695zm-19.725 6.42l18.568-6.189-1.39-4.167-18.567 6.19 1.389 4.166zm5.265 1.75l-5.12-3.072-2.26 3.766 5.12 3.072 2.26-3.766zm2.072 3.348l5.394-4.854-2.938-3.264-5.394 4.854 2.938 3.264zm5.394-4.854a.732.732 0 01-1.034-.054l3.265-2.938a3.66 3.66 0 00-5.17-.272l2.939 3.265zm-1.034-.054a.732.732 0 01.054-1.034l2.938 3.265a3.66 3.66 0 00.273-5.169l-3.265 2.938zm.054-1.034l-5.154 4.639 2.938 3.264 5.154-4.638-2.938-3.265zm1.023 12.152l-3.101-5.17-3.766 2.26 3.101 5.17 3.766-2.26zm4.867-18.423l-6.189 18.568 4.167 1.389 6.19-18.568-4.168-1.389zm-8.633 20.682c1.61 2.682 5.622 2.241 6.611-.725l-4.167-1.39a.732.732 0 011.322-.144l-3.766 2.26zm-6.003-8.05a3.66 3.66 0 004.332-.419l-2.938-3.264a.732.732 0 01.866-.084l-2.26 3.766zm3.592-1.722a3.66 3.66 0 00-.69 4.603l3.766-2.26c.18.301.122.687-.138.921l-2.938-3.264zm11.97-9.984a.732.732 0 01-.925-.926l4.166 1.389c.954-2.861-1.768-5.583-4.63-4.63l1.39 4.167zm-19.956 2.022c-2.967.99-3.407 5.003-.726 6.611l2.26-3.766a.732.732 0 01-.145 1.322l-1.39-4.167z" fill="#fff" mask="url(#icon-payments-cat_svg__a)"></path>
                  <defs>
                    <linearGradient id="icon-payments-cat_svg__paint0_linear_1141_21101" x1="25" y1="2" x2="25" y2="48" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#fff" stop-opacity="0.71"></stop>
                      <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <a class="button__text btn-no-drop">Pagar</a>
            </div>
          </button>
        </div>
      </div>
    </div>
  </section>


  <div class="modal-Login">
    <form class="form-login">
      <img class="closeX-login" src="src/imgs/Close.svg" alt="">
      <div class="flex-column">
        <label>Email </label>
      </div>
      <div class="inputForm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20">
          <g data-name="Layer 3" id="Layer_3">
            <path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path>
          </g>
        </svg>
        <input placeholder="Digite seu email" class="input" type="text">
      </div>

      <div class="flex-column">
        <label>Senha</label>
      </div>
      <div class="inputForm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20">
          <path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path>
          <path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path>
        </svg>
        <input placeholder="Digite sua senha" class="input" type="password">
      </div>

      <div class="flex-row">
        <div>
          <input type="radio">
          <label>Lembre me</label>
        </div>
        <span class="span">Esqueceu a senha?</span>
      </div>
      <button class="button-submit">Entrar</button>
      <p class="p">Não possui conta? <a href="cadastro.html"><span class="span">Cadastre - se</span></a>

      </p>
      <p class="p line">Ou com</p>

      <div class="flex-row">
        <button class="btn google">
          <svg xml:space="preserve" style="enable-background:new 0 0 512 512;" viewBox="0 0 512 512" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="20" version="1.1">
            <path d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
    c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
    C103.821,274.792,107.225,292.797,113.47,309.408z" style="fill:#FBBB00;"></path>
            <path d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
    c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
    c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z" style="fill:#518EF8;"></path>
            <path d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
    c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
    c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z" style="fill:#28B446;"></path>
            <path d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
    c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
    C318.115,0,375.068,22.126,419.404,58.936z" style="fill:#F14336;"></path>

          </svg>

          Google

        </button><button class="btn apple">
          <svg xml:space="preserve" style="enable-background:new 0 0 22.773 22.773;" viewBox="0 0 22.773 22.773" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Capa_1" width="20" height="20" version="1.1">
            <g>
              <g>
                <path d="M15.769,0c0.053,0,0.106,0,0.162,0c0.13,1.606-0.483,2.806-1.228,3.675c-0.731,0.863-1.732,1.7-3.351,1.573 c-0.108-1.583,0.506-2.694,1.25-3.561C13.292,0.879,14.557,0.16,15.769,0z"></path>
                <path d="M20.67,16.716c0,0.016,0,0.03,0,0.045c-0.455,1.378-1.104,2.559-1.896,3.655c-0.723,0.995-1.609,2.334-3.191,2.334 c-1.367,0-2.275-0.879-3.676-0.903c-1.482-0.024-2.297,0.735-3.652,0.926c-0.155,0-0.31,0-0.462,0 c-0.995-0.144-1.798-0.932-2.383-1.642c-1.725-2.098-3.058-4.808-3.306-8.276c0-0.34,0-0.679,0-1.019 c0.105-2.482,1.311-4.5,2.914-5.478c0.846-0.52,2.009-0.963,3.304-0.765c0.555,0.086,1.122,0.276,1.619,0.464 c0.471,0.181,1.06,0.502,1.618,0.485c0.378-0.011,0.754-0.208,1.135-0.347c1.116-0.403,2.21-0.865,3.652-0.648 c1.733,0.262,2.963,1.032,3.723,2.22c-1.466,0.933-2.625,2.339-2.427,4.74C17.818,14.688,19.086,15.964,20.67,16.716z"></path>
              </g>
            </g>
          </svg>

          Apple

        </button>
      </div>
    </form>

  </div>
  <script type="module" src="src/js/main.js"></script>
</body>

</html>