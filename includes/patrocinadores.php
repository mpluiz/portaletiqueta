<?php

// Pegando galeria de imagens do post relacionado
$patrocinadores = (get_field('patrocinadores', $post->ID));

if ($patrocinadores) :
    $imagens = get_post_gallery_images($patrocinadores[0]);
    shuffle($imagens);
    ?>

    <section id="patrocinadores">
        <div class="container">
            <div class="patrocinadores owl-carousel owl-theme">
                <?php
                    foreach ($imagens as $imagem) {
                        echo '<div class="item"> 
                                <a class="open" href="'.$imagem.'"><img class="thumb" src="'.$imagem.'"></a>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </section>

<?php endif ?>