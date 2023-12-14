<section class="container-fluid" id="block_03">
    <div class="container block mt-4 d-flex flex-column align-items-center">

    <?php

        global $postLandingpage;
        $argsLandingpage = array('post_type' => 'landing_page', 'numberposts' => 1);
        $myPostLandingpage = get_posts($argsLandingpage);

        foreach($myPostLandingpage as $postLandingpage): setup_postdata($postLandingpage);
            $customLandingpage = get_post_custom($postLandingpage -> ID);

            $blockTitle_03 = $customLandingpage['titulo_bloco_03'][0];
            $copyright_03 = $customLandingpage['copyright_do_bloco_3'][0];
            $img_03 = $customLandingpage['imagem_do_bloco_3'][0];
            $linkButton_03 = $customLandingpage['link_do_botao_do_bloco_3'][0];
            $textButton_03 = $customLandingpage['texto_do_botao_do_bloco_3'][0];

        ?>

        <?php echo $blockTitle_03; ?>

        <?php echo $copyright_03; ?>

        <img 
            src="<?php echo pods_image_url($img_03, 'full'); ?>"
            class="mt-4"
            width="320"
            height="490"
            alt="Renda extra ainda neste verão">

        <a href="<?php echo $linkButton_03; ?>" class="btn btn-lg btn-success py-3 rounded-pill btn-nutri m-t-minus-10 min-width-350">
            <?php echo $textButton_03; ?>
        </a>

        <?php endforeach; ?>

    </div>
</section>