(function(a, d, c) {
  var e = a(document),
      b = d.Modernizr;
  a(document).ready(function() {
    a.fn.foundationAlerts ? e.foundationAlerts() : null;
    a.fn.foundationAccordion ? e.foundationAccordion() : null;
    a.fn.foundationTooltips ? e.foundationTooltips() : null;
    a("input, textarea").placeholder();
    a.fn.foundationButtons ? e.foundationButtons() : null;
    a.fn.foundationNavigation ? e.foundationNavigation() : null;
    a.fn.foundationTopBar ? e.foundationTopBar() : null;
    a.fn.foundationCustomForms ? e.foundationCustomForms() : null;
    a.fn.foundationMediaQueryViewer ? e.foundationMediaQueryViewer() : null;
    a.fn.foundationTabs ? e.foundationTabs() : null;
    a("#featured").orbit()
  });
  if (b.touch) {
    a(d).load(function() {
      setTimeout(function() {
        d.scrollTo(0, 1)
      }, 0)
    })
  }
})(jQuery, this);
(function(a) {
  a(window).load(function() {
    jQuery(".mainslider").revolution({
      delay: 7000,
      startheight: 330,
      startwidth: 950,
      thumbWidth: 100,
      thumbHeight: 35,
      thumbAmount: 4,
      onHoverStop: "on",
      hideThumbs: 200,
      navigationType: "thumb",
      navigationStyle: "round",
      navigationArrows: "verticalcentered",
      touchenabled: "on",
      navOffsetHorizontal: 0,
      navOffsetVertical: 0,
      shadow: 1,
      fullWidth: "off"
    });
    a(function() {
      a(".contentHover").hover(function() {
        a(this).children(".content").fadeTo(200, 0.25).end().children(".hover-content").fadeTo(200, 1).show()
      }, function() {
        a(this).children(".content").fadeTo(200, 1).end().children(".hover-content").fadeTo(200, 0).hide()
      })
    })
  });
  a(window).load(function() {
    a(".simple-slider").flexslider({
      animation: "slide",
      slideshow: false,
      controlNav: false,
      smoothHeight: true,
      start: function(b) {
        a("body").removeClass("loading")
      }
    });
    a(".gallery-slider").flexslider({
      animation: "slide",
      controlNav: "thumbnails",
      start: function(b) {
        a("body").removeClass("loading")
      }
    });
    a("#main-slider").flexslider({
      animation: "slide",
      controlNav: false,
      start: function(b) {
        a("body").removeClass("loading")
      }
    })
  });
  a(document).ready(function() {
    var b = a("#logo h1");
    if (b.html() == "Touchm") {
      b.html("Touch<span>M</span>")
    }
    a(".form-submit").addClass("medium button")
  });
  a(window).load(function() {
    var d = a("#container");
    d.isotope({
      itemSelector: ".element",
      resizable: false,
      masonry: {
        columnWidth: d.width() / 12
      }
    });
    a(window).smartresize(function() {
      d.isotope({
        masonry: {
          columnWidth: d.width() / 12
        }
      })
    });
    var c = a("#options .option-set"),
        b = c.find("a");
    b.click(function() {
      var e = a(this);
      if (e.hasClass("selected")) {
        return false
      }
      var f = e.parents(".option-set");
      f.find(".selected").removeClass("selected");
      e.addClass("selected");
      var h = {},
          i = f.attr("data-option-key"),
          g = e.attr("data-option-value");
      g = g === "false" ? false : g;
      h[i] = g;
      if (i === "layoutMode" && typeof changeLayoutMode === "function") {
        changeLayoutMode(e, h)
      } else {
        d.isotope(h)
      }
      return false
    })
  })
})(jQuery);
