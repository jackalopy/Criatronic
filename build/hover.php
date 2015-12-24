<div class="hover">
    <div class="close-button">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    
    <?php
    $i = 0;
    foreach($productClass as $class) :
    ?>
    <ul class="products desk-only"
        data_id="<?php echo $i; ?>"
        data_title="<?php echo $class["title"]; ?>"
    >
        <?php 
        $j = 0;
        foreach($class['list'] as $product) :
          if( $j % 3 == 0) : ?>
            <div class="line">
        <?php endif; ?>
            <li class="column1-3">
                <div class="content product animated animated-1"
                    data_title="<?php echo $product["title"]; ?>"
                    
                    <?php
                    $k = 0;
                    foreach($product["image"] as $image) :
                    ?>
                        data_image<?php echo $k; ?>="<?php echo ASSETS_URL . "img/products/" . $class["folder"] . "/" . $image; ?>"
                    <?php
                    $k++;
                    endforeach
                    ?>
                    
                    <?php
                    $k = 0;
                    foreach($product["description"] as $paragraph) :
                    ?>
                        data_description<?php echo $k; ?>="<?php echo $paragraph; ?>"
                    <?php
                    $k++;
                    endforeach
                    ?>
                    
                    data_caption="<?php echo $product["caption"]; ?>"
                >
                    <div class="image" style="background-image: url(<?php echo ASSETS_URL . "img/products/" . $class["folder"] . "/" . $product["image"][0]; ?>)"></div>
                    <div class="title"><?php echo $product["title"]; ?></div>
                </div>
            </li>
        <?php
        if( ($j % 3) + 1 == 0) : ?>
            <div class="line">
        <?php
        endif;
        $j++;
        endforeach;
        ?>
    </ul>
    <ul class="products dragdealer mobile-only" id="products_dragdealer_<?php echo $i; ?>"
        data_id="<?php echo $i; ?>"
        data_title="<?php echo $class["title"]; ?>"
    >
        <div class="handle" style="width: <?php echo count($class['list']) . "00%"; ?>">
            <?php foreach($class['list'] as $product) : ?>
                <li class="product" style="width: <?php echo 100 / count($class['list']) . "%"; ?>"
                    data_title="<?php echo $product["title"]; ?>"
                    
                    <?php
                    $k = 0;
                    foreach($product["image"] as $image) :
                    ?>
                        data_image<?php echo $k; ?>="<?php echo ASSETS_URL . "img/products/" . $class["folder"] . "/" . $image; ?>"
                    <?php
                    $k++;
                    endforeach
                    ?>
                    
                    <?php
                    $k = 0;
                    foreach($product["description"] as $paragraph) :
                    ?>
                        data_description<?php echo $k; ?>="<?php echo $paragraph; ?>"
                    <?php
                    $k++;
                    endforeach
                    ?>
                    
                    data_caption="<?php echo $product["caption"]; ?>"
                >
                    <div class="centerV">
                        <div class="centerH animated animated-1">
                            <div class="image" style="background-image: url(<?php echo ASSETS_URL . "img/products/" . $class["folder"] . "/" . $product["image"][0]; ?>)"></div>
                            <div class="title"><?php echo $product["title"]; ?></div>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
        </div>
    </ul>
    <?php
    $i++;
    endforeach;
    ?>
    <div class="info">
        <div class="line">
            <h1 class="title"></h1>
            <div class="image"></div>
            <div class="description"></div>
            <div class="caption"></div>
        </div>
    </div>
</div>