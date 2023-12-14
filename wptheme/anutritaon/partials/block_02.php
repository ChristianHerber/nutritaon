<section class="container-fluid" id="block_02">
    <div class="container block mt-4 d-flex flex-column align-items-center">

    <?php

        global $postLandingpage;
        $argsLandingpage = array('post_type' => 'landing_page', 'numberposts' => 1);
        $myPostLandingpage = get_posts($argsLandingpage);

        foreach($myPostLandingpage as $postLandingpage): setup_postdata($postLandingpage);
            $customLandingpage = get_post_custom($postLandingpage -> ID);

            $blockTitle_02 = $customLandingpage['titulo_do_bloco'][0];
            $items_02 = $customLandingpage['itens'][0];
            $linkButton_02 = $customLandingpage['link_do_botao_2'][0];
            $textButton_02 = $customLandingpage['texto_do_botao_2'][0];

        ?>

        <?php echo $blockTitle_02; ?>

        <?php echo $items_02; ?>

        <a href="<?php echo $linkButton_02; ?>" class="btn btn-lg btn-success py-3 rounded-pill btn-nutri btn-nutri-secondary my-4">
            <?php echo $textButton_02; ?>
        </a>

        <?php endforeach; ?>

    </div>
</section>