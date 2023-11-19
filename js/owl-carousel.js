        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                //animateOut: 'slideOutDown',
                //animateIn: 'flipInX',
                loop: true,
                margin: 10,
                nav: true,
                navText: ["a", "b"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
        })