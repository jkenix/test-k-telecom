document.addEventListener("DOMContentLoaded", () => {
    const Tarrifs = new Swiper(".Tarrifs", {
        loop: false,
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
        slidesPerView: "auto",
        watchOverflow: true,

        breakpoints: {
            576: {
                slidesPerView: "auto",
                spaceBetween: 10,
            },

            767: {
                slidesPerView: "auto",
                spaceBetween: 15,
            },

            1200: {
                slidesPerView: "auto",
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 28,
            },
        },

        navigation: {
            nextEl: ".swiper-button-next__Tarrifs",
            prevEl: ".swiper-button-prev__Tarrifs",
        },

        pagination: {
            el: ".swiper-pagination__Tarrifs", // Селектор для контейнера пагинации
            clickable: true, // Делаем пагинацию кликабельной
            bulletClass:
                "swiper-pagination-bullet swiper-pagination-bullet__Tarrifs", // Класс для каждой точки
            bulletActiveClass:
                "swiper-pagination-bullet__Tarrifs_active swiper-pagination-bullet-active", // Класс для активной точки
        },

        on: {
            init: function () {
                this.update(); // Обновляем слайдер после инициализации
                this.navigation.update();
            },
            slideChangeTransitionEnd: function () {
                this.navigation.update();
            },
        },
    });
});

// Находим элементы
// Находим все элементы tariffs-select
const tariffsOptions = document.querySelectorAll('.tariffs-select');

tariffsOptions.forEach(option => {
    const tariffsDesc = option.querySelector('.tariffs-select__desc'); // Находим конкретный desc в текущем option
    const tariffsContent = option.querySelector('.tariffs-select__content'); // Находим соответствующий content

    // Добавляем обработчик события клика
    tariffsDesc.addEventListener('click', function() {
        // Добавляем или удаляем класс active только для этого content
        tariffsContent.classList.toggle('active');
    });
});