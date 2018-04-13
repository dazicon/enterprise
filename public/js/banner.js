   $(document).ready(function(){
        $('.banner').slick({
            dots: true,
            autoplay:true,
            arrows:false,
            autoplaySpeed:3000,
        });

        $('.scroll-2').slick({
            slidesToShow:5,
            slidesToScroll:1,
            dots: false,
            arrows:true,
            responsive: [

                {
                    breakpoint:1024,
                    settings: {
                        slidesToShow:4,
                        slidesToScroll:4,
                        arrows: false,
                        dots: false,
                    }
                },
                {
                    breakpoint:767,
                    settings: {
                        slidesToShow:3,
                        slidesToScroll:3,
                        arrows: false,
                        dots: false,
                    }
                },

                {
                    breakpoint:480,
                    settings: {
                        slidesToShow:2,
                        slidesToScroll:2,
                        arrows: false,
                        dots: false,
                    }
                },

            ]
        });

        $('.scroll').slick({
            slidesToShow:3,
            slidesToScroll:3,
            dots: true,
            arrows:false,
            responsive: [
                {
                    breakpoint:767,
                    settings: {
                        slidesToShow:3,
                        slidesToScroll:3,
                        arrows: false,
                        dots: false,
                    }
                },

                {
                    breakpoint:480,
                    settings: {
                        slidesToShow:2,
                        slidesToScroll:2,
                        arrows: false,
                        dots: false,
                    }
                },

                {
                    breakpoint:390,
                    settings: {
                        slidesToShow:1,
                        slidesToScroll:1,
                        arrows: false,
                        dots: false,
                    }
                },
            ]

        });

        $(".scroll-3 .items").each(function(index) {
            $(".scroll-3 .items").slice(index * 10, index * 10 + 10).wrapAll("<div></div>");
        });
        $(".scroll-3").slick({
            useTransform: true,
            autoplay: true,
        })

    });