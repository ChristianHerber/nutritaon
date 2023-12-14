<footer class="container-fluid" id="block_05">
        <div class="container block mt-4 d-flex flex-column align-items-center">

        <?php

            global $postLandingpage;
            $argsLandingpage = array('post_type' => 'landing_page', 'numberposts' => 1);
            $myPostLandingpage = get_posts($argsLandingpage);

            foreach($myPostLandingpage as $postLandingpage): setup_postdata($postLandingpage);
                $customLandingpage = get_post_custom($postLandingpage -> ID);

                $blockTitle_05 = $customLandingpage['titulo_do_bloco_05'][0];
                $img_05 = $customLandingpage['imagem_do_bloco_5'][0];
                $imageText = $customLandingpage['texto_da_imagem_do_bloco_5'][0];
                $investText = $customLandingpage['texto_sobre_o_investimento'][0];
                $value_01 = $customLandingpage['valor_antigo'][0];
                $value_02 = $customLandingpage['valor_parcelado'][0];
                $value_03 = $customLandingpage['valor_a_vista'][0];
                $imgSelo = $customLandingpage['selo_de_qualidade'][0];
                $linkButton_05 = $customLandingpage['link_do_botao_do_bloco_5'][0];
                $textButton_05 = $customLandingpage['texto_do_botao_do_bloco_5'][0];

            ?>

            <?php echo $blockTitle_05; ?>

            <div class="card border-0 col-lg-6 col-md-6 col-sm-12">
                <img 
                    src="<?php echo pods_image_url($img_05, 'full'); ?>"
                    class="mt-4 img-fluid card-img-top"
                    width="655"
                    height="654"
                    alt="Com este Ebook, você não apenas investe em conhecimento valioso, mas também garante um caminho para gerar renda extra nas férias">

                <div class="card-body bg-success text-white card-text">
                    <?php echo wpautop($imageText); ?>
                </div>
            </div>

                <p class="text_green text-uppercase my-4 py-4">
                    <strong>
                        <?php echo $investText; ?>
                    </strong>
                </p>

                <div class="values">
                    <h2 class="text-muted text-decoration-line-through">De <?php echo $value_01; ?></h2>
                    <h2>Por <?php echo $value_02; ?></h2>
                    <h2><em>ou à vista <strong><?php echo $value_03; ?></strong></em></h2>
                </div>

                <img 
                    src="<?php echo pods_image_url($imgSelo, 'full'); ?>"
                    class="mt-4 img-fluid"
                    width="320"
                    height="317"
                    alt="Selo de qualidade">

                <a href="<?php echo $linkButton_05; ?>" class="btn btn-lg btn-success py-3 rounded-pill btn-nutri btn-nutri-secondary my-4 mt-4">
                    <?php echo $textButton_05; ?>
                </a>

        <?php endforeach; ?>

        </div>
    </footer>