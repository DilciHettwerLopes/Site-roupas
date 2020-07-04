Vou postar meu código, você vai ter que adaptar para sua necessidade!

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php
        $readPosts = new Read;
        $readPosts->ExeRead("ws_posts", "WHERE post_type = 'slide' ORDER BY post_date DESC LIMIT 3");
        if ($readPosts->getResult()):
            for ($i=0; $i < 3 ; $i++) { 
            foreach ($readPosts->getResult() as $post):
                extract($post);
                $item_class = ($i) ? 'item active' : 'item';

    ?>

                <div class="<?=$item_class?>">
                    <div class="fill" style="background-image:url('<?=HOME?>/uploads/<?=$post_cover;?>');"></div>
                    <div class="carousel-caption">

                    </div>
                </div>

    <?php


            endforeach;
            }
        endif;
    ?>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>