<?php
// Перебор массива для вывода id по порядку добавления
if (!empty($attributes['tariffs'])) :
?>

    <div class="tariffs">
        <div class="container tariffs-container">

            <h2 class="tariffs__title">
                Тарифные планы
            </h2>

            <div class="tariffs-wrap">
                <div class="swiper Tarrifs">
                    <div class="swiper-wrapper tariffs__content">

                        <?php
                        $id = array_map(function ($item) {
                            return url_to_postid($item['tariffs-url']);
                        }, $attributes['tariffs']);

                        $args = [
                            'post_type' => 'tariffs',
                            'orderby' => 'post__in', // Указываем поле сортировки
                            'include' => $id,
                            'numberposts' => -1,
                            'post_status' => 'publish', // Опубликованные
                        ];

                        $posts = get_posts($args);
                        global $post;
                        ?>

                        <?php foreach ($posts as $post) : setup_postdata($post); ?>
                            <?php get_template_part('templates/tariff'); ?>
                        <?php endforeach; ?>


                    </div>

                </div>

                <div class="swiper-button swiper-button-next swiper-button-next__Tarrifs"></div>
                <div class="swiper-button swiper-button-prev swiper-button-prev__Tarrifs"></div>

                <div class="swiper-pagination swiper-pagination__Tarrifs swiper-pagination-bullets swiper-pagination-horizontal">

                </div>
            </div>

        </div>
    </div>

<?php endif; ?>