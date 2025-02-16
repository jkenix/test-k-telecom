// Инициализируем слайдер
document.addEventListener("DOMContentLoaded", () => {
    const Tarrifs = new Swiper(".Tarrifs", {
        loop: false,
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
        slidesPerView: "auto",
        watchOverflow: true,

        // Точки останова
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

        // Навигация
        navigation: {
            nextEl: ".swiper-button-next__Tarrifs",
            prevEl: ".swiper-button-prev__Tarrifs",
        },

        // Пагинация (точки)
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

// Находим все элементы tariffs-select
const tariffsSelect = document.querySelectorAll(".tariffs-select");

tariffsSelect.forEach((select) => {
    const tariffsDesc = select.querySelector(".tariffs-select__desc"); // Находим конкретный desc в текущем select
    const tariffsContent = select.querySelector(".tariffs-select__content"); // Находим соответствующий content

    // Добавляем обработчик события клика
    tariffsDesc.addEventListener("click", function () {
        // Добавляем или удаляем класс active только для этого select
        tariffsContent.classList.toggle("active");
    });
});
