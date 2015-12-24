<?php
$meta = $master->getMeta();
$productClass = $master->getProductClass();
$about = $master->getAbout();
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("head.php");?>
  </head>
  <body>
    <header>
      <?php include("header.php"); ?>
    </header>
    <div class="sections">
      <div class="section fullscreen mainLogo" id="section1" menu_title="Home">
        <div class="background">
          <div class="image" style="background-image: url(<?php echo ASSETS_URL . "img/back.png"; ?>)"></div>
        </div>
        <div class="foreground">
          <div class="centerV">
            <div class="centerH">
              <div class="logo" style="background-image: url(<?php echo ASSETS_URL . "img/logo.png"; ?>)" data-sr></div>
            </div>
          </div>
          <div class="arrowDown">
            <img src="<?php echo ASSETS_URL . "img/arrowDown.png"; ?>"></img>
          </div>
        </div>
      </div>
      <div class="section about" id="section2" menu_title="Sobre">
        <div class="line">
          <div class="column1-1 intro">
            <div class="content" data-sr>
              <?php echo $about["intro"]; ?>
            </div>
          </div>
        </div>
        <?php
        $i = 0;
        foreach($about["list"] as $info) :
          if( $i % 3 == 0) : ?>
            <div class="line">
        <?php endif; ?>
          <div class="column1-3">
            <div class="content">
              <div class="icon" data-sr="wait .<?php echo ( ($i - 1) % 3) + 1; ?>s"><img src="<?php echo ASSETS_URL . "img/" . $info["icon"]; ?>" alt=""></div>
              <div class="title" data-sr="wait .<?php echo ( ($i - 1) % 3) + 1; ?>s"><?php echo $info["title"]; ?></div>
              <div class="text" data-sr="wait .<?php echo ( ($i - 1) % 3) + 1; ?>s">
                <?php echo $info["text"]; ?>
              </div>
            </div>
          </div>
        <?php if( ($i + 1) % 3 == 0) : ?>
            </div>
        <?php
        endif;
        $i++;
        endforeach;
        ?>
      </div>
      <div class="section products" id="section3" menu_title="Produtos">
        <div class="centerV">
          <div class="centerH">
            <div class="line">
              <?php
              $i = 0;
              foreach($productClass as $class) :
              ?>
              <div class="column1-3">
                <div class="content product<?php echo $i; ?> animated animated-1"
                  data_id="<?php echo $i; ?>"
                >
                  <div class="icon" data-sr="wait .<?php echo ( ($i - 1) % 3) + 1; ?>s"><img src="<?php echo ASSETS_URL . "img/" . $class["image"]; ?>" alt=""></div>
                  <div class="title" data-sr="wait .<?php echo ( ($i - 1) % 3) + 1; ?>s"><?php echo $class["title"]; ?></div>
                  <div class="description" data-sr="wait .<?php echo ( ($i - 1) % 3) + 1; ?>s"><?php echo $class["description"]; ?></div>
                </div>
              </div>
              <?php
              $i++;
              endforeach;
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="subsection talkToUs">
        <div class="centerV">
          <div class="centerH">
            <div class="line">
              <div class="column1-2">
                <div class="content">
                  <div class="description" data-sr>Ainda não encontrou o que precisa?</div>
                  <a href="mailto:criatronic@criatronic.com.br?subject=Produto Personalizado" class="button" data-sr>Personalize o seu pedido</a>
                </div>
              </div>
              <div class="column1-2">
                <div class="content">
                  <div class="description" data-sr>Tem uma grande ideia para um projeto?</div>
                  <a href="mailto:criatronic@criatronic.com.br?subject=Ideia de Projeto" class="button" data-sr>Queremos conhecê-la</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section clientsBlock" id="section4" menu_title="Clientes">
        <div class="line">
          <div class="title desk-only">Alguns de nossos clientes</div>
          <div class="title mobile-only" data-sr>nossos clientes</div>
          <ul class="clients">
            <?php for($i = 1; $i <= 9; $i++): ?>
              <li class="column1-3">
                <div class="content">
                  <div class="client animated animated-1" style="background-image: url(<?php echo ASSETS_URL . "img/clients/" . $i . (($i == 1 | $i == 2 | $i == 7)? ".jpg" : ".png"); ?>)" data-sr="wait .<?php echo ( ($i - 1) % 3) + 1; ?>s"></div>
                </div>
              </li>
            <?php endfor; ?>
          </ul>
        </div>
      </div>
      <div class="section contact" id="section5" menu_title="Contato">
        <div class="map" id=map></div>
        <div class="line info">
          <div class="column1-2">
            <div class="content">
              <div class="icon" data-sr>
                <img src="<?php echo ASSETS_URL . "img/mail.png"; ?>"></img>
              </div>
              <div class="title" data-sr>Contato</div>
              <div class="tel" data-sr>(11) 4616-2690</div>
              <div class="tel" data-sr>(11) 4261-1402</div>
              <div class="email" data-sr>criatronic@criatronic.com.br</div>
            </div>
          </div>
          <div class="column1-2">
            <div class="content">
              <div class="icon" data-sr>
                <img src="<?php echo ASSETS_URL . "img/local.png"; ?>"></img>
              </div>
              <div class="title" data-sr>Localização</div>
              <div class="address" data-sr>Alameda Tuca, 340</div>
              <div class="address" data-sr>Jardim Ipes - Cotia -SP</div>
              <div class="address" data-sr>CEP 06716-190</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <?php include("footer.php"); ?>
    </footer>
    <?php include("hover.php"); ?>
  </body>
</html>