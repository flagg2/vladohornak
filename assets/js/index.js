$(document).ready(() => {
            let interval = null;
            var mySwiper = new Swiper('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination


                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                on: {
                    slideChange: function () {
                        if (interval) {
                            window.clearInterval(interval)
                        }
                         interval = window.setInterval(() => {
                            mySwiper.slideNext();
                        }, 5000)
                    }
                },

                // And if we need scrollbar
                pagination: {
                    el: '.swiper-pagination',
                },
            })
            })
