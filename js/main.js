//GLOBAL VARIBALES

//selector constants
var root = $("html, body");
const main_window = $(window),
  pageBody = $("body"),
  bdyOnePage = $("body.landing-page-demo "),
  hasSubMenu = $(".has-sub-menu"),
  pageHeader = $("#page-header"),
  navMain = $("nav.menu-navbar"),
  toTopBtn = $(".back-to-top"),
  heroVegasSlider = $(".page-hero.hero-vegas-slider"),
  textInput = $("form.main-form .text-input").not("#contact-us-form .text-input"),
  tabLink = $(".ma-tabs .tabs-links .tab-link"),
  portfolioGroup = $(".portfolio .portfolio-group");

$(function () {
  ("use strict");

  // function to fire the conter plugin
  let counterShowsUp = false;

  function fireCounter() {
    if ($(".js-stats-counter").length) {
      if (jQuery().countTo && counterShowsUp === false) {
        let pos = $(".js-stats-counter").offset().top;
        if (main_window.scrollTop() + main_window.innerHeight() - 50 >= pos) {
          $(".counter").countTo();
          counterShowsUp = true;
        }
      }
    }
  }

  // Start open/close navbar search box
  $(".header-search-box form").on("click", function (e) {
    e.stopPropagation();
  });

  $(".header-search-btn").on("click", function () {
    $(".header-search-box").addClass("show");

    setTimeout(function () {
      $(".search-input").focus();
    }, 1000);
  });

  /* ********* Start dark mode switcher ***********/
  // Dark theme switcher disabled - light theme only

  const modeSwitcher = $(".mode-switcher");
  const themeStoredKey = "ThemeColor";
  const darkTheme_class = "dark-theme";
  const lightTheme_class = "light-theme";
  const themeStoredItem = localStorage.getItem(themeStoredKey);
  /*********  Custom functions Area *********/

  function setThemeMode(themeColor) {
    if (themeColor === darkTheme_class) {
      pageBody.addClass(darkTheme_class);
      modeSwitcher.addClass(darkTheme_class).removeClass(lightTheme_class);
      localStorage.setItem(themeStoredKey, darkTheme_class);
      localStorage.removeItem(lightTheme_class);
    }
    if (themeColor === lightTheme_class) {
      pageBody.removeClass(darkTheme_class);
      modeSwitcher.addClass(lightTheme_class).removeClass(darkTheme_class);
      localStorage.setItem(themeStoredKey, lightTheme_class);
      localStorage.removeItem(darkTheme_class);
    }
  }

  /* *******  Set the theme according to the local storage value ********/
  // Force light theme - no dark theme
  setThemeMode(lightTheme_class);

  /* ******* Set the theme by clicking the theme switcher ********/
  $(modeSwitcher).on("click", function () {
    if ($(this).is("." + darkTheme_class)) {
      setThemeMode(lightTheme_class);
    } else if ($(this).is("." + lightTheme_class)) {
      setThemeMode(darkTheme_class);
    }
  });

  /* ----------------------------------
     START #page-header js rules
   ---------------------------------- */

  /* *******  start open/close navbar search box   ********/
  $(".header-search-box .close-search , .header-search-box").on("click", () => {
    $(".header-search-box").removeClass("show");
  });

  /* Start bootstrap Scrollspy Options  */
  //on one page demos only
  if (navMain) {
    $(bdyOnePage).scrollspy({
      target: navMain,
      offset: navMain.innerHeight() + 1,
    });
  }

  // make the menu stick on top whlie reloading
  if ($(this).scrollTop() > 50) {
    if (!$(pageHeader).hasClass("is-sticky")) {
      pageHeader.addClass("is-sticky");
    }
  }

  /* *******  make the menu stick on top upon the page scrolling   ********/
  main_window.on("scroll", function () {
    if ($(this).scrollTop() > 50) {
      if (!$(pageHeader).hasClass("is-sticky")) {
        pageHeader.addClass("is-sticky");
      }
    } else {
      if ($(pageHeader).hasClass("is-sticky")) {
        pageHeader.removeClass("is-sticky");
      }
    }
  });

  /* *******  show/hide navbar links menu  ********/
  $(".menu-toggler").on("click", function () {
    pageHeader.find(".show:not(.menu-wrapper) ").removeClass("show");
    pageHeader.find(".menu-wrapper").toggleClass("show");
    $(".menu-toggler").toggleClass("close-menu");
  });

  /* ******* close the currnt opend menu when click on its wrapper ********/
  $(".links-list").on("click", function (e) {
    e.stopPropagation();
  });

  $(".menu-wrapper").on("click", function () {
    $(this).removeClass("show");
    if ($(".menu-toggler").hasClass("close-menu")) {
      $(".menu-toggler").removeClass("close-menu");
    }
  });

  /* ******* showing navbar sub-menus on mobile ********/
  hasSubMenu.on("click", function (e) {
    e.stopPropagation();
    if (!(main_window.innerWidth() > 1199)) {
      // Only toggle if clicking on dropdown arrow or the menu item with submenu
      const $subMenu = $(this).find(".sub-menu");
      if ($subMenu.length) {
        $(this).toggleClass("show");
      }
    }
  });

  /* ******* Start Smooth Scrolling To page sections Area********/
  $(".landing-page-demo .menu-navbar .menu-link, .landing-page-demo .menu-navbar .menu-text").on("click", function (e) {
    const link = $(this).attr("href");
    let currentMainNavHeight = navMain.innerHeight();
    if (link && link.charAt(0) === "#") {
      e.preventDefault();
      const target = this.hash || link;
      $(root).animate(
        {
          scrollTop: $(target).offset().top - currentMainNavHeight + 1,
        },
        500
      );

      if (!$(this).parent(".menu-item").hasClass("has-sub-menu")) {
        // to close the menu after going to crossponding section
        if ($(".menu-wrapper").hasClass("show")) {
          $(".menu-wrapper").removeClass("show");
        }

        // to change the menu toggler buttn icon
        if ($(".menu-toggler").hasClass("close-menu")) {
          $(".menu-toggler").removeClass("close-menu");
        }
      }
    }
  });

  /* ******* Smooth Scrolling for sub-menu links ********/
  $(".sub-menu a[href*='#']").on("click", function (e) {
    const href = $(this).attr("href");
    // Check if it's an external link or internal one
    if (href.includes("#")) {
      const target = href.split("#")[1];
      const targetElement = $("#" + target);

      if (targetElement.length) {
        e.preventDefault();
        let scrollPosition = targetElement.offset().top - navMain.innerHeight() + 1;

        $(root).animate(
          {
            scrollTop: scrollPosition,
          },
          500,
          function () {
            // Close the dropdown after scrolling
            $(".header-basic .has-sub-menu.active").removeClass("active").removeClass("show");

            // Close the mobile menu
            if ($(".menu-wrapper").hasClass("show")) {
              $(".menu-wrapper").removeClass("show");
            }
            if ($(".menu-toggler").hasClass("close-menu")) {
              $(".menu-toggler").removeClass("close-menu");
            }
          }
        );
      }
    }
  });

  /* ******* Manual Click-based Dropdown Toggle ********/
  $(".header-basic .menu-group .dropdown-arrow").on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();

    const menuItem = $(this).closest(".has-sub-menu");
    const hasActualSubMenu = menuItem.find(".sub-menu").length > 0;

    // Check if this menu item has an actual sub-menu element
    if (menuItem.length && hasActualSubMenu) {
      // Close other open submenus
      $(".header-basic .has-sub-menu.active").not(menuItem).removeClass("active").removeClass("show");

      // Toggle active and show classes on clicked menu item
      menuItem.toggleClass("active");
      menuItem.toggleClass("show");
    }
  });

  // Also handle clicks on menu-text for mobile
  $(".header-basic .menu-text").on("click", function (e) {
    const menuItem = $(this).closest(".has-sub-menu");
    const hasActualSubMenu = menuItem.find(".sub-menu").length > 0;

    if (menuItem.length && hasActualSubMenu) {
      e.preventDefault();
      e.stopPropagation();

      // Close other open submenus
      $(".header-basic .has-sub-menu.active").not(menuItem).removeClass("active").removeClass("show");

      // Toggle active and show classes on clicked menu item
      menuItem.toggleClass("active");
      menuItem.toggleClass("show");
    }
  });

  // Close dropdown when clicking outside
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".has-sub-menu").length) {
      $(".header-basic .has-sub-menu.active").removeClass("active").removeClass("show");
    }
  });

  /*----------------------------------
   END #page-header js rules
  ----------------------------------*/
  if ($(textInput).length) {
    let inputHasText = "has-text";

    if ($(textInput).val().trim() !== "")
      $(textInput).parent().addClass(inputHasText);
    else $(textInput).parent().removeClass(inputHasText);

    /*
        check if the form input has data or not while focusing out
        from the input to set the label
        in the right place by the css rules.
        */
    $(textInput).on("focusout", function () {
      if ($(this).val().trim() !== "") {
        $(this).parent().addClass(inputHasText);
      } else {
        $(this).parent().removeClass(inputHasText);
      }
    });
  }

  // Start Teleport To Window Top When Clicking on Back To Top Button
  let $teleportOverlay = null;
  let $teleportVideo = null;

  function initTeleportOverlay() {
    if (!$teleportOverlay) {
      $teleportOverlay = $(`
        <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:#000000;z-index:999999;display:none;will-change:opacity;transform:translateZ(0);">
          <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:100%;max-width:400px;aspect-ratio:16/9;overflow:hidden;">
            <video src="assets/images-zconnect/index-page/Optimized-Logo-Movie-v1.webm" muted playsinline preload="auto" style="width:100%;height:100%;object-fit:cover;display:block;"></video>
            <div style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;background:radial-gradient(ellipse at center, transparent 35%, #000000 75%);"></div>
          </div>
        </div>
      `);
      $('body').append($teleportOverlay);
      $teleportVideo = $teleportOverlay.find('video')[0];
    }
  }

  // Pre-initialize overlay on idle so video buffers in background
  if (typeof requestIdleCallback !== 'undefined') {
    requestIdleCallback(initTeleportOverlay);
  } else {
    setTimeout(initTeleportOverlay, 1000);
  }

  $(toTopBtn).on("click", function (e) {
    e.preventDefault();
    initTeleportOverlay();

    // Reset video time to start cleanly
    if ($teleportVideo) {
      $teleportVideo.currentTime = 0;
      $teleportVideo.playbackRate = 5.0; // Smooth hardware-decoded speed
      let playPromise = $teleportVideo.play();
      if (playPromise !== undefined) {
        playPromise.catch(error => { /* Video autoplay block handling */ });
      }
    }

    // Fade in overlay smoothly, jump to top, then fade out
    $teleportOverlay.stop(true, true).fadeIn(200, function () {
      root.css("scroll-behavior", "auto").scrollTop(0);
      window.scrollTo(0, 0);

      setTimeout(function () {
        $teleportOverlay.fadeOut(400, function () {
          root.css("scroll-behavior", "smooth");
          if ($teleportVideo) {
            $teleportVideo.pause();
          }
        });
      }, 1100);
    });
  });
  // End Teleport To Window Top When Clicking on Back To Top Button

  /* Start Portfolio btns  */
  if ($(".portfolio .portfolio-btn").length) {
    $(".portfolio .portfolio-btn").on("click", function () {
      $(this).addClass("active").siblings().removeClass("active");

      const $filterValue = $(this).attr("data-filter");
      portfolioGroup.isotope({
        filter: $filterValue,
      });
    });
  }

  /* *******   initialize Counter plugin ********/
  fireCounter();

  /* ********* set the Background Image path and opacity for elements that has the  a vlaue for data-bg-img attribute***********/
  const bg_img = $("*");
  bg_img.each(function () {
    if ($(this).attr("data-bg-img")) {
      $(this).css("background-image", `url(${$(this).attr("data-bg-img")}`);
    }
    if ($(this).attr("data-bg-opacity")) {
      $(this).css("opacity", `${$(this).attr("data-bg-opacity")}`);
    }
  });

  /* *******  Start skills Bars  ********/
  $(window).on("scroll", function () {
    $(".skills .skill .skill-bar .bar").each(function () {
      let barOriginalPosition = $(this).offset().top + $(this).outerHeight();
      let barCurrPosition = $(window).scrollTop() + $(window).height();
      let widthValue = $(this).attr("data-skill-val");
      if (barCurrPosition > barOriginalPosition) {
        $(this).css({
          width: widthValue + "%",
        });
      }
    });
  });

  /* ******* Start Percentage loading screen interactions ********/
  // DISABLED: Loading animation removed
  // let percentage = 0;
  // let LoadingCounter = setInterval(function () {
  //   if (percentage <= 100) {
  //     // $('#loading-screen ').css('opacity', (100 - percentage));
  //     $("#loading-screen .loading-counter").text(percentage + "%");
  //     $("#loading-screen .bar").css("width", (100 - percentage) / 2 + "%");
  //     $("#loading-screen .progress-line").css(
  //       "transform",
  //       "scale(" + percentage / 100 + ")"
  //     );
  //     percentage++;
  //   } else {
  //     $("#loading-screen").fadeOut(500);
  //     setTimeout(() => {
  //       $("#loading-screen").remove();
  //     }, 1500);
  //     clearInterval(LoadingCounter);
  //   }
  // }, 10);

  // Immediately hide the loading screen
  $("#loading-screen").fadeOut(300);
  setTimeout(() => {
    $("#loading-screen").remove();
  }, 500);

  main_window.on("scroll", function () {
    if ($(this).scrollTop() > 50) {
      //show back to top btn
      toTopBtn.addClass("show");
    } else {
      //hide back to top btn
      toTopBtn.removeClass("show");
    }

    // to make sure the counter will start counting while its section apear on the screen
    fireCounter();
  });

  /*************Start Contact Form Functionality************/

  const contactForm = $("#contact-us-form"),
    userName = $("#user-name"),
    userEmail = $("#user-email"),
    msgSubject = $("#msg-subject"),
    msgText = $("#msg-text"),
    submitBtn = $("#submit-btn");

  let isValidInput = false,
    isValidEmail = false;

  function ValidateNotEmptyInput(input, errMsg) {
    if (input.length) {
      if (input.val().trim() === "") {
        $(input).siblings(".error-msg").text(errMsg).css("display", "block");
        isValidInput = false;
      } else {
        $(input).siblings(".error-msg").text("").css("display", "none");
        isValidInput = true;
      }
    }
  }

  function validateEmailInput(emailInput) {
    let pattern =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (pattern.test(emailInput.val()) === false) {
      $(emailInput)
        .siblings(".error-msg")
        .text("Please Enter a valid Email")
        .css("display", "block");
      isValidEmail = false;
    } else {
      $(emailInput).siblings(".error-msg").text("").css("display", "none");
      isValidEmail = true;
    }
  }

  // Initialize Contact Modal Popup dynamically
  let contactModal = null;
  let contactModalContent = null;
  function initContactModalPopup() {
    if (!contactModal && document.body) {
      contactModal = document.createElement('div');
      contactModal.className = 'modal-backdrop-contact';
      document.body.appendChild(contactModal);
      
      contactModalContent = document.createElement('div');
      contactModalContent.className = 'modal-content-popup-contact';
      contactModalContent.innerHTML = `
        <h2>Message Sent Successfully!</h2>
        <p>Thank you for reaching out to us!<br><br>A confirmation email has been sent to your email address. Our team will review your message and get back to you shortly.</p>
        <button class="modal-close-btn-contact" onclick="location.reload()">Close</button>
      `;
      document.body.appendChild(contactModalContent);
    }
  }

  window.showContactModalPopup = function() {
    initContactModalPopup();
    if (contactModal && contactModalContent) {
      contactModal.classList.add('show');
      contactModalContent.classList.add('show');
    }
  };

  submitBtn.on("click", function (e) {
    e.preventDefault();

    ValidateNotEmptyInput(userName, "Please Enter Your Name");
    ValidateNotEmptyInput(userEmail, "Please Enter Your Email");
    ValidateNotEmptyInput(msgSubject, "Please Enter Your subject");
    ValidateNotEmptyInput(msgText, "Please Enter Your Message");
    validateEmailInput(userEmail);

    if (isValidInput && isValidEmail) {
      $.ajax({
        type: "POST",
        url: contactForm.attr("action"),
        data: contactForm.serialize(),
        dataType: "json",

        success: function (response) {
          const doneMsg = $(".done-msg");

          if (response.success) {
            showContactModalPopup();
            contactForm[0].reset();
          } else {
            doneMsg
              .text(response.message || "Error sending message. Please try again.")
              .css("color", "#dc3545")
              .addClass("show");

            setTimeout(function () {
              doneMsg.text("").removeClass("show").css("color", "");
            }, 4000);
          }
        },

        error: function () {
          const doneMsg = $(".done-msg");
          doneMsg
            .text("Error sending message. Please try again later.")
            .css("color", "#dc3545")
            .addClass("show");

          setTimeout(function () {
            doneMsg.text("").removeClass("show").css("color", "");
          }, 4000);
        }
      });
      return false;
    }
  });

  /*************End Contact Form Functionality************/

  /* ---------------------------------- 
    Start Vendors plugins options Area 
    ---------------------------------- */

  //initialize swiper [Hero Section] //fade slider
  if ($(".hero-swiper-slider.fade-effect .swiper-container").length) {
    const heroSlider = new Swiper(
      ".hero-swiper-slider.fade-effect .swiper-container",
      {
        speed: 1000,
        loop: true,
        reverseDirection: true,
        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
        autoplay: {
          delay: 8000,
          disableOnInteraction: false,
        },
      }
    );
  }
  if ($(".hero-swiper-slider.slide-effect .swiper-container").length) {
    const heroSlider = new Swiper(
      ".hero-swiper-slider.slide-effect .swiper-container",
      {
        speed: 1000,
        loop: true,
        reverseDirection: true,
        effect: "slide",
        fadeEffect: {
          crossFade: true,
        },
        on: {
          init: function () {
            let thisSlider = this;
            $(".slides-count").html("0" + (this.slides.length - 2));
            $(".curent-slide").html("0" + (this.realIndex + 1));
          },
          slideChange: function () {
            $(".curent-slide").html("0" + (this.realIndex + 1));
          },
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: true,
        },
        pagination: {
          el: ".hero-swiper-slider.slide-effect .swiper-pagination",
          type: "bullets",
          clickable: true,
        },
        navigation: {
          nextEl: ".hero-swiper-slider.slide-effect .swiper-button-next",
          prevEl: ".hero-swiper-slider.slide-effect .swiper-button-prev",
        },
      }
    );
  }

  // initialize swiper [Testimonials with 1 Column]
  if ($(".testimonials-1-col  .swiper-container").length) {
    const testimonialsSlider_1 = new Swiper(
      ".testimonials-1-col  .swiper-container",
      {
        // Optional parameters
        speed: 500,
        loop: true,
        grabCursor: true,
        slidesPerView: 1,
        spaceBetween: 50,
        delay: 8000,
        autoplay: {
          delay: 8000,
        },
        navigation: {
          nextEl: ".testimonials-1-col .swiper-button-next",
          prevEl: ".testimonials-1-col .swiper-button-prev",
        },
        on: {
          resize: function () {
            this.update();
          },
        },
      }
    );
  }

  //initialize swiper [clients Section]
  if ($(".our-clients .swiper-container").length) {
    const partenersSlider = new Swiper(".our-clients .swiper-container", {
      // Optional parameters
      speed: 600,
      loop: true,
      spaceBetween: 20,
      grabCursor: true,
      delay: 5000,
      autoplay: {
        delay: 5000,
      },
      slidesPerView: 3,
      breakpoints: {
        991: {
          slidesPerView: 6,
          spaceBetween: 30,
        },
      },
    });
  }

  //initialize swiper [portfolio-slider]
  if ($(".portfolio-slider .swiper-container").length) {
    const swiperPortfolioSlider = new Swiper(
      ".portfolio-slider .swiper-container",
      {
        speed: 600,
        loop: true,
        centeredSlides: true,
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
          delay: 5000,
        },
        breakpoints: {
          991: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
        navigation: {
          nextEl: ".portfolio-slider .swiper-button-next",
          prevEl: ".portfolio-slider .swiper-button-prev",
        },
      }
    );
  }

  //initialize swiper [portfolio-single]
  if (
    $(".portfolio-single .portfolio-single-slider .swiper-container").length
  ) {
    const swiperPortfolioSingleSlider = new Swiper(
      ".portfolio-single .portfolio-single-slider .swiper-container",
      {
        spaceBetween: 10,
        grabCursor: true,
        reverseDirection: true,
        loop: true,
        slidesPerView: 1,
        autoplay: {
          delay: 5000,
          disableOnInteraction: true,
        },

        navigation: {
          nextEl: ".portfolio-single-slider .swiper-button-next",
          prevEl: ".portfolio-single-slider .swiper-button-prev",
        },
      }
    );
  }

  //initialize swiper [awards-slider]
  if ($(".awards-slider").length) {
    const awardsSlider = new Swiper(".awards-slider", {
      speed: 600,
      loop: true,
      grabCursor: true,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      mousewheel: true,
      navigation: {
        nextEl: ".awards-slider .swiper-button-next",
        prevEl: ".awards-slider .swiper-button-prev",
      },
    });
  }

  //initialize swiper [events-slider]
  if ($(".events-slider .swiper-container").length) {
    const eventsSlider = new Swiper(".events-slider .swiper-container", {
      speed: 600,
      loop: true,
      spaceBetween: 30,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".events-slider .swiper-pagination",
        clickable: true,
      },
      slidesPerView: 1,
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
      },
    });
  }

  /* *******  loading  wow.js  Options ********/
  const wow = new WOW({
    animateClass: "animated",
    offset: 100,
  });
  wow.init();

  /* *******  loading fancybox.js library ********/
  if ($("*").fancybox) {
    $().fancybox({
      selector: '[data-fancybox=".show-in-fancybox "]:visible',
      loop: true,
      buttons: false,
    });
  }

  /* *******  loading tilt.js library ********/
  if (jQuery().tilt) {
    $("[data-tilt]").tilt({
      perspective: 1000,
    });
  }

  /* *******  Loading the isotope plugin ********/
  if (jQuery().isotope) {
    portfolioGroup.isotope({
      // options
      itemSelector: ".portfolio-item",
      layoutMode: "fitRows",
      percentPosition: true,
      filter: "*",
      stagger: 30,
      containerStyle: null,
    });
  }

  /* *******  Start particles.js ********/
  if ($(".particles-js.dots").length) {
    // constant to hold the particals options
    const customParticlesOptions = {
      particles: {
        number: {
          value: 150,
          density: {
            enable: true,
            value_area: 500,
          },
        },
        color: {
          value: "#09aff4",
        },
        shape: {
          type: "circle",
          stroke: {
            width: 0,
            color: "#000000",
          },
          polygon: {
            nb_sides: 5,
          },
          image: {
            src: "img/github.svg",
            width: 100,
            height: 100,
          },
        },
        opacity: {
          value: 0.5,
          random: true,
          anim: {
            enable: true,
            speed: 1,
            opacity_min: 0,
            sync: false,
          },
        },
        size: {
          value: 3,
          random: true,
          anim: {
            enable: true,
            speed: 5,
            size_min: 0.3,
            sync: false,
          },
        },
        line_linked: {
          enable: false,
          distance: 150,
          color: "#ffffff",
          opacity: 0.4,
          width: 1,
        },
        move: {
          enable: true,
          speed: 5,
          direction: "none",
          random: true,
          straight: false,
          out_mode: "out",
          bounce: false,
          attract: {
            enable: false,
            rotateX: 600,
            rotateY: 1200,
          },
        },
      },
      interactivity: {
        detect_on: "canvas",
        events: {
          onhover: {
            enable: false,
            mode: "bubble",
          },
          onclick: {
            enable: false,
            mode: "repulse",
          },
          resize: true,
        },
        modes: {
          grab: {
            distance: 400,
            line_linked: {
              opacity: 1,
            },
          },
          bubble: {
            distance: 250,
            size: 0,
            duration: 2,
            opacity: 0,
            speed: 3,
          },
          repulse: {
            distance: 400,
            duration: 0.4,
          },
          push: {
            particles_nb: 4,
          },
          remove: {
            particles_nb: 2,
          },
        },
      },
      retina_detect: true,
    };
    particlesJS("particles-js", customParticlesOptions);
  }

  /* *******  loading Splitting.js library ********/
  if (!(typeof window.Splitting === "undefined")) {
    if ($("[data-splitting]").length) {
      Splitting();
    }
  }

  /* *******  loading simpleParallax.js library ********/
  if (!(typeof window.simpleParallax === "undefined")) {
    let parallaxblock = document.querySelectorAll(".parallax-img ");
    if (parallaxblock.length) {
      new simpleParallax(parallaxblock, {
        delay: 1,
      });
    }
  }
  /* ----------------------------------
    End Vendors plugins options Area 
     ---------------------------------- */




});


/* ----------------------------------
  Obfuscate email addresses 
   ---------------------------------- */
document.addEventListener("DOMContentLoaded", function () {
  // Function to obfuscate email addresses
  function obfuscateEmail(user, domain) {
    return user + '@' + domain;
  }

  // Get all elements with the class 'email'
  var emailElements = document.querySelectorAll('.email');

  // Obfuscate and insert the email addresses
  emailElements.forEach(function (element) {
    var user = element.getAttribute('data-user') || "hr-ms";
    var domain = element.getAttribute('data-domain') || "zconnect.ph";
    var email = obfuscateEmail(user, domain);
    element.innerHTML = '<a class="email link" href="mailto:' + email + '">' + email + '</a>';
  });
});



/* ----------------------------------
  Ativate the modal certifications popup 
   ---------------------------------- */
$(document).ready(function () {
  $('.img-fluid').on('click', function () {
    let imgSrc = $(this).attr('src');
    let imgAlt = $(this)
      .attr('alt')
      .replace(/\^-/g, '<br>')   // Replace "^-" with a new line
      .replace(/\^/g, '<br>');   // Replace "^" with a new line if no hyphen follows
    $('#modalCertificateImg').attr('src', imgSrc);
    $('#certificateModalLabel').html(imgAlt); // Use .html() to render the <br> tag
  });

  // Stop the onclick from activating while modal dialog is open.
  $('#certificateModal').on('show.bs.modal', function () {
    $('#modalCertificateImg').off('click');
  });

  // Re-enable the click event after the modal closes
  $('#certificateModal').on('hidden.bs.modal', function () {
    $('#modalCertificateImg').on('click', function (e) {
      e.stopPropagation();
    });
  });
});

function scrollToSidebarTarget(targetSelector) {
  const target = $(targetSelector);
  if (!target.length) return;

  // Find the featured image in the target section
  const featuredImg = target.find('.featured-img-area').first();
  if (!featuredImg.length) return;

  // Get the vertical position of the sidebar title "List of Services"
  const sidebarTitle = $('.sidebar-title');
  let alignmentOffset = 0;
  
  if (sidebarTitle.length) {
    // Get the top of the sidebar title relative to the viewport
    const sidebarTitleRect = sidebarTitle[0].getBoundingClientRect();
    alignmentOffset = sidebarTitleRect.top;
  } else {
    // Fallback: use nav height if sidebar title not found
    alignmentOffset = navMain.length ? navMain.innerHeight() : 0;
  }

  // Calculate scroll position: featured image top - alignment offset
  const scrollPosition = featuredImg.offset().top - alignmentOffset;

  window.scrollTo({
    top: Math.max(scrollPosition, 0),
    behavior: 'auto'
  });
  
  // Immediately highlight the clicked button
  const linkHref = targetSelector.startsWith('#') ? targetSelector : '#' + targetSelector;
  $('#sidebar li a').parent().removeClass('active');
  $('#sidebar li a[href="' + linkHref + '"]').parent().addClass('active');
}

/**
 * Higlight list item for current scroll position
 */
$(document).ready(function () {
  let sections = $("section");
  let navLinks = $("#sidebar li a");
  
  // Get sidebar title offset once on load
  const sidebarTitle = $('.sidebar-title');
  let alignmentOffset = 0;
  
  if (sidebarTitle.length) {
    alignmentOffset = sidebarTitle[0].getBoundingClientRect().top;
  }

  $(window).on("scroll", function () {
    let scrollPos = $(document).scrollTop();

    sections.each(function () {
      const featuredImg = $(this).find('.featured-img-area').first();
      if (!featuredImg.length) return;
      
      // Align with sidebar title position
      let top = featuredImg.offset().top - alignmentOffset;
      let bottom = top + $(this).outerHeight();

      if (scrollPos >= top && scrollPos < bottom) {
        navLinks.parent().removeClass("active");
        $('#sidebar li a[href="#' + $(this).attr("id") + '"]').parent().addClass("active");
      }
    });
  });
});

$("#sidebar a").on("click", function (event) {
  event.preventDefault();
  const target = this.getAttribute("href");

  if (!target || target === "#") return;
  scrollToSidebarTarget(target);
});

/* ******* Smooth scroll to hash on page load ********/
(function () {
  if (window.location.hash) {
    const hash = window.location.hash.substring(1);
    const target = $("#" + hash);

    if (target.length) {
      setTimeout(function () {
        scrollToSidebarTarget("#" + hash);
      }, 50);
    }
  }
});

$('#eventModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Element na clinick
  var imgSrc = button.data('modal-img'); // Kunin ang data-modal-img
  var imgTitle = button.data('modal-title'); // Kunin ang data-modal-title

  var modal = $(this);
  modal.find('#modalImage').attr('src', imgSrc);
  modal.find('#modalTitle').text(imgTitle);
});

