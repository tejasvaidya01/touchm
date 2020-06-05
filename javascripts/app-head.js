jQuery(window).load(function() {
    $(".toggle-view li").click(function() {
        var a = $(this).children("div.toggle-content");
        if (a.is(":hidden")) {
            a.slideDown("200");
            $(this).children("span").html('<i class="icon-minus"></i>')
        } else {
            a.slideUp("200");
            $(this).children("span").html('<i class="icon-plus"></i>')
        }
    })
});
$(window).load(function() {
    if($("#carousel-works"). length){
        $("#carousel-works").carouFredSel({
            responsive: true,
            width: "100%",
            auto: false,
            circular: false,
            infinite: false,
            prev: {
                button: "#car_prev",
                key: "left"
            },
            next: {
                button: "#car_next",
                key: "right"
            },
            swipe: {
                onMouse: true,
                onTouch: true
            },
            items: {
                visible: {
                    min: 1,
                    max: 4
                },
                width: 225
            }
        })
    }
    if($(".carousel-type2"). length){
        $(".carousel-type2").carouFredSel({
            responsive: true,
            width: "100%",
            auto: false,
            circular: false,
            infinite: false,
            prev: {
                button: "#car_prev2",
                key: "left"
            },
            next: {
                button: "#car_next2",
                key: "right"
            },
            swipe: {
                onMouse: true,
                onTouch: true
            },
            items: {
                visible: {
                    min: 1,
                    max: 1
                },
                width: 225
            }
        })
    }
});
jQuery(window).load(function() {
    $(".has-tipsy").tipsy({
        gravity: $.fn.tipsy.autoNS,
        fade: true
    })
});
$(document).ready(function() {
    var a;
    $(".accordion .accordion-content").hide();
    $(".accordion .accordion-title").attr("stus", "");
    $(".accordion .accordion-content:eq(0)").slideDown();
    $(".accordion .accordion-title:eq(0)").attr("stus", "active").addClass("active");
    $(".accordion .accordion-title").click(function() {
        a = $(this).attr("stus");
        if (a != "active") {
            $(".accordion .accordion-content").slideUp();
            $(".accordion .accordion-title").attr("stus", "").removeClass("active");
            $(this).next().slideDown();
            $(this).attr("stus", "active").addClass("active")
        } else {
            $(this).next().slideUp();
            $(this).attr("stus", "").removeClass("active")
        }
        return false
    })
});
jQuery(document).ready(function(a) {
    a(".titan-lb").lightbox({
        scrolling: "auto",
        theme: "default"
    });
    prettyPrint()
});
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(".scrollup").fadeIn()
        } else {
            $(".scrollup").fadeOut()
        }
    });
    $(".scrollup").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false
    })
});
$(document).ready(function() {
    $(".image-overlay .overlay-icon").fadeTo("fast", 0);
    $(".image-overlay .overlay-icon").hover(function() {
        $(this).fadeTo("fast", 0.6)
    }, function() {
        $(this).fadeTo("fast", 0)
    })
});
(function(a) {
    a(document).ready(function() {
        a(".top-bar ul.right > li.active-trail.sf-depth-1 > a").addClass("active")
    })
})(jQuery);
