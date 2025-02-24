<div class="tariffs__item swiper-slide">
    <div class="tariffs__item-title">
        <?php the_title(); ?>
    </div>

    <div class="tariffs__speed tariffs-info">

        <?php if (!empty(get_field('tariff-speed'))) : ?>
            <div class="tariffs-info__speed">

                <div class="tariffs-info__dop-title">
                    Скорость интернета
                </div>
                <div class="tariffs-info__znach">
                    <?php echo get_field('tariff-speed'); ?>
                </div>

            </div>
        <?php endif; ?>

        <?php if (!empty(get_field('tariff-desc'))) : ?>
            <div class="tariffs-info__desc">
                <?php echo get_field('tariff-desc'); ?>
            </div>
        <?php endif; ?>

    </div>

    <div class="tariffs__option tariffs-select">
        <div class="tariffs-select__content"></div>
        <div class="tariffs-select__desc">
            <span>ТВ + 100 ₽</span>
            <span>(пакет “Базовый”)</span>
        </div>
    </div>

    <?php if (!empty(get_field('tariff-price'))) : ?>
        <div class="tariffs__price">
            <span class="tariffs__price-value">
                <?php echo get_field('tariff-price'); ?> ₽
            </span>
            <span class="tariffs__price-duration">
                в месяц
            </span>
        </div>

        <div class="tariffs__warning">
            *итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
        </div>
    <?php endif; ?>

    <a href="/" class="btn btn__tarrifs tariffs__button">
        <span class="tariffs__button_select-tariff">Выбрать тариф</span>
        <span class="tariffs__button_select-only">Выбрать</span>
    </a>

</div>