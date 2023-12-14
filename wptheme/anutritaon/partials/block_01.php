<header class="container block d-flex flex-column align-items-center" id="block_01">

    <?php

        global $postLandingpage;
        $argsLandingpage = array('post_type' => 'landing_page', 'numberposts' => 1);
        $myPostLandingpage = get_posts($argsLandingpage);

        foreach($myPostLandingpage as $postLandingpage): setup_postdata($postLandingpage);
            $customLandingpage = get_post_custom($postLandingpage -> ID);

			$imgTitle_01 = $customLandingpage['imagem_do_titulo'][0];
            $copyright_01 = $customLandingpage['copyright'][0];
			$imgEbook_01 = $customLandingpage['capa_do_e-book'][0];
			$linkButton_01 = $customLandingpage['link_do_botao'][0];
			$textButton_01 = $customLandingpage['texto_do_botao'][0];

    ?>
	
    <img src="<?php echo pods_image_url($imgTitle_01, 'full'); ?>"
        class="img-fluid mb-4"
        width="800"
        height="172"
        alt="A Nutri tá On - Renda extra já">
	
	<?php echo $copyright_01; ?>

    <img 
        src="<?php echo pods_image_url($imgEbook_01, 'full'); ?>"
        class="img-fluid my-4 py-4"
        width="550"
        height="624"
        alt="Capa do E-book: Descubra estratégias mais atuais e inovadoras do mercado digital para nutricionistas">

    <a href="<?php echo $linkButton_01; ?>" class="btn btn-lg btn-success py-3 rounded-pill btn-nutri my-4">
        <?php echo $textButton_01; ?>
    </a>
	
	<?php endforeach; ?>
</header>