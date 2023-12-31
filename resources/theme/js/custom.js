var dompet = (function () {
    "use strict";
    var e = $(window).width(),
        t =
            ($(window).height(),
            function () {
                var e = $(window).height() - 206;
                $(".chatbox .msg_card_body").css("height", e);
            });
    return {
        init: function () {
            var n;
            jQuery("#menu").length > 0 && $("#menu").metisMenu(),
                jQuery(".metismenu > .mm-active ").each(function () {
                    !jQuery(this).children("ul").length > 0 && jQuery(this).addClass("active-no-child");
                }),
                $("#checkAll").on("change", function () {
                    $("td input, .email-list .custom-checkbox input").prop("checked", $(this).prop("checked"));
                }),
                $(".nav-control").on("click", function () {
                    $("#main-wrapper").toggleClass("menu-toggle"), $(".hamburger").toggleClass("is-active");
                }),
                (function () {
                    for (
                        var e = window.location,
                            t = $("ul#menu a")
                                .filter(function () {
                                    return this.href == e;
                                })
                                .addClass("mm-active")
                                .parent()
                                .addClass("mm-active");
                        t.is("li");

                    )
                        t = t.parent().addClass("mm-show").parent().addClass("mm-active");
                })(),
                $("ul#menu>li").on("click", function () {
                    "mini" === $("body").attr("data-sidebar-style") && (console.log($(this).find("ul")), $(this).find("ul").stop());
                }),
                (n = window.outerHeight),
                ((n = window.outerHeight) > 0 ? n : screen.height) && $(".content-body").css("min-height", n + 60 + "px"),
                $('a[data-action="collapse"]').on("click", function (e) {
                    e.preventDefault(), $(this).closest(".card").find('[data-action="collapse"] i').toggleClass("mdi-arrow-down mdi-arrow-up"), $(this).closest(".card").children(".card-body").collapse("toggle");
                }),
                $('a[data-action="expand"]').on("click", function (e) {
                    e.preventDefault(), $(this).closest(".card").find('[data-action="expand"] i').toggleClass("icon-size-actual icon-size-fullscreen"), $(this).closest(".card").toggleClass("card-fullscreen");
                }),
                $('[data-action="close"]').on("click", function () {
                    $(this).closest(".card").removeClass().slideUp("fast");
                }),
                $('[data-action="reload"]').on("click", function () {
                    var e = $(this);
                    e.parents(".card").addClass("card-load"),
                        e.parents(".card").append('<div class="card-loader"><i class=" ti-reload rotate-refresh"></div>'),
                        setTimeout(function () {
                            e.parents(".card").children(".card-loader").remove(), e.parents(".card").removeClass("card-load");
                        }, 2e3);
                }),
                (function () {
                    const e = $(".header").innerHeight();
                    $(window).scroll(function () {
                        "horizontal" === $("body").attr("data-layout") &&
                            "static" === $("body").attr("data-header-position") &&
                            "fixed" === $("body").attr("data-sidebar-position") &&
                            ($(this.window).scrollTop() >= e ? $(".dlabnav").addClass("fixed") : $(".dlabnav").removeClass("fixed"));
                    });
                })(),
                e <= 991 &&
                    (jQuery(".menu-tabs .nav-link").on("click", function () {
                        jQuery(this).hasClass("open")
                            ? (jQuery(this).removeClass("open"), jQuery(".fixed-content-box").removeClass("active"), jQuery(".hamburger").show())
                            : (jQuery(".menu-tabs .nav-link").removeClass("open"), jQuery(this).addClass("open"), jQuery(".fixed-content-box").addClass("active"), jQuery(".hamburger").hide());
                    }),
                    jQuery(".close-fixed-content").on("click", function () {
                        jQuery(".fixed-content-box").removeClass("active"), jQuery(".hamburger").removeClass("is-active"), jQuery("#main-wrapper").removeClass("menu-toggle"), jQuery(".hamburger").show();
                    })),
                jQuery(".bell-link").on("click", function () {
                    jQuery(".chatbox").addClass("active");
                }),
                jQuery(".chatbox-close").on("click", function () {
                    jQuery(".chatbox").removeClass("active");
                }),
                $(".btn-number").on("click", function (e) {
                    e.preventDefault(), (fieldName = $(this).attr("data-field")), (type = $(this).attr("data-type"));
                    var t = $("input[name='" + fieldName + "']"),
                        n = parseInt(t.val());
                    isNaN(n) ? t.val(0) : "minus" == type ? t.val(n - 1) : "plus" == type && t.val(n + 1);
                }),
                jQuery(".dlab-chat-user-box .dlab-chat-user").on("click", function () {
                    jQuery(".dlab-chat-user-box").addClass("d-none"), jQuery(".dlab-chat-history-box").removeClass("d-none");
                }),
                jQuery(".dlab-chat-history-back").on("click", function () {
                    jQuery(".dlab-chat-user-box").removeClass("d-none"), jQuery(".dlab-chat-history-box").addClass("d-none");
                }),
                jQuery(".dlab-fullscreen").on("click", function () {
                    jQuery(".dlab-fullscreen").toggleClass("active");
                }),
                jQuery(".dlab-fullscreen").on("click", function (e) {
                    document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement
                        ? document.exitFullscreen
                            ? document.exitFullscreen()
                            : document.msExitFullscreen
                            ? document.msExitFullscreen()
                            : document.mozCancelFullScreen
                            ? document.mozCancelFullScreen()
                            : document.webkitExitFullscreen && document.webkitExitFullscreen()
                        : document.documentElement.requestFullscreen
                        ? document.documentElement.requestFullscreen()
                        : document.documentElement.webkitRequestFullscreen
                        ? document.documentElement.webkitRequestFullscreen()
                        : document.documentElement.mozRequestFullScreen
                        ? document.documentElement.mozRequestFullScreen()
                        : document.documentElement.msRequestFullscreen && document.documentElement.msRequestFullscreen();
                }),
                jQuery(".show-pass").on("click", function () {
                    jQuery(this).toggleClass("active"),
                        "password" == jQuery("#dlab-password").attr("type") ? jQuery("#dlab-password").attr("type", "text") : "text" == jQuery("#dlab-password").attr("type") && jQuery("#dlab-password").attr("type", "password");
                }),
                $(".heart").on("click", function () {
                    $(this).toggleClass("heart-blast");
                }),
                $(".dlab-load-more").on("click", function (e) {
                    e.preventDefault(), $(this).append(' <i class="fa fa-refresh"></i>');
                    var t = $(this).attr("rel"),
                        n = $(this).attr("id");
                    $.ajax({
                        method: "POST",
                        url: t,
                        dataType: "html",
                        success: function (e) {
                            $("#" + n + "Content").append(e), $(".dlab-load-more i").remove();
                        },
                    });
                }),
                jQuery("#lightgallery").length > 0 && $("#lightgallery ,#lightgallery-1 ,#lightgallery-2 ").lightGallery({ loop: !0, thumbnail: !0, exThumbImage: "data-exthumbimage" }),
                $(".custom-file-input").on("change", function () {
                    var e = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(e);
                }),
                t(),
                jQuery(".dlab-demo-content").length > 0 &&
                    (new PerfectScrollbar(".dlab-demo-content"),
                    $(".dlab-demo-trigger").on("click", function () {
                        $(".dlab-demo-panel").addClass("show");
                    }),
                    $(".dlab-demo-close, .bg-close").on("click", function () {
                        $(".dlab-demo-panel").removeClass("show");
                    }),
                    $(".dlab-demo-bx").on("click", function () {
                        $(".dlab-demo-bx").removeClass("demo-active"), $(this).addClass("demo-active");
                    })),
                jQuery("#datetimepicker1").length > 0 && $("#datetimepicker1").datetimepicker({ inline: !0 }),
                jQuery("#ckeditor").length > 0 &&
                    ClassicEditor.create(document.querySelector("#ckeditor"), {})
                        .then((e) => {
                            window.editor = e;
                        })
                        .catch((e) => {
                            console.error(e.stack);
                        }),
                jQuery(".dz-theme-mode").on("click", function () {
                    jQuery(this).toggleClass("active"), jQuery(this).hasClass("active") ? jQuery("body").attr("data-theme-version", "dark") : jQuery("body").attr("data-theme-version", "light");
                });
        },
        load: function () {
            setTimeout(function () {
                jQuery("#preloader").remove(), $("#main-wrapper").addClass("show");
            }, 0),
                jQuery(".default-select").length > 0 && jQuery(".default-select").niceSelect(),
                jQuery("body").append('');
        },
        resize: function () {
            t();
        },
        handleMenuPosition: function () {
            e > 1024 &&
                $(".metismenu  li")
                    .unbind()
                    .each(function (e) {
                        if ($("ul", this).length > 0) {
                            var t = (a = $("ul:first", this).css("display", "block")).offset().left,
                                n = a.width(),
                                a = $("ul:first", this).removeAttr("style"),
                                o = ($("body").height(), $("body").width());
                            if (jQuery("html").hasClass("rtl")) var l = t + n <= o;
                            else l = t > 0;
                            l ? $(this).find("ul:first").removeClass("left") : $(this).find("ul:first").addClass("left");
                        }
                    });
        },
    };
})();
jQuery(document).ready(function () {
    $('[data-bs-toggle="popover"]').popover(), dompet.init();
}),
    jQuery(window).on("load", function () {
        "use strict";
        dompet.load(),
            setTimeout(function () {
                dompet.handleMenuPosition();
            }, 1e3);
    }),
    jQuery(window).on("resize", function () {
        "use strict";
        dompet.resize(),
            setTimeout(function () {
                dompet.handleMenuPosition();
            }, 1e3);
    });
