<section class="container-fluid" id="block_04">
    <div class="container block mt-4 d-flex flex-column align-items-center">

        <?php

        $postLandingpage;
        $argsLandingpage = array('post_type' => 'landing_page', 'numberposts' => 1);
        $myPostLandingpage = get_posts($argsLandingpage);

        foreach($myPostLandingpage as $postLandingpage): setup_postdata($postLandingpage);
            $customLandingpage = get_post_custom($postLandingpage -> ID);

            $copyright_04 = $customLandingpage['copyright_bloco_4'][0];

        ?>

        <?php echo wpautop($copyright_04); ?>

        <?php endforeach; ?>

    </div>
</section>