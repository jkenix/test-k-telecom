<section class="offer container-fluid">
    <div class="container">

        <div class="offer__content">

            <div class="offer__info">
                <h1 class="offer__title">
                    <?php if (!empty($attributes['offer-title'])) : ?>
                        <?php echo $attributes['offer-title']; ?>
                    <?php endif; ?>
                </h1>

                <div class="offer__list">
                    <?php if (!empty($attributes['offer-list'])) : ?>
                        <?php echo $attributes['offer-list']; ?>
                    <?php endif; ?>
                </div>

                <?php if (!empty($attributes['offer-link'])) : ?>
                    <a href="<?php echo $attributes['offer-link']; ?>" class="btn btn__offer offer__button">
                        Подробнее
                    </a>
                <?php else: ?>
                    <a href="/" class="btn btn__offer offer__button">
                        Подробнее
                    </a>
                <?php endif; ?>


            </div>

            <div class="offer__image" itemscope itemtype="https://schema.org/ImageObject">
                <?php if (!empty($attributes['offer-img'])) : ?>
                    <?= wp_get_attachment_image(
                        $attributes['offer-img']['id'],
                        'full',
                        null,
                        ['class' => 'img-responsive', 'itemprop' => 'image']
                    ) ?>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>