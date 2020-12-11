$(document).ready(function () {
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    $(window).scroll(function (event) {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });

    var yMousePos = 0;
    var lastScrolledTop = 0;
    var counter = document.getElementById("counters");
    var count = counter.offsetTop;
    var $check = 1;
    $(window).scroll(function (event) {
        if (lastScrolledTop != $(document).scrollTop()) {
            yMousePos -= lastScrolledTop;
            lastScrolledTop = $(document).scrollTop();
            yMousePos += lastScrolledTop;
        }
        if (yMousePos > count - 600) {
            if ($check == 1) {
                $check = 0;
                $(".Single").each(function () {
                    var $this = $(this);
                    jQuery({Counter: 0}).animate({
                        Counter: $this.text()
                    }, {
                        duration: 1000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
            }

        }

    });

});

