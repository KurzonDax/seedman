/**
 * Created by Randy on 7/20/14.
 */

jQuery(function ($) {

    $(function () {

       /* $(window).load( function() {
            var windowHeight=getWindowHeight();
            var footerHeight = $("#page-footer").outerHeight(true);
            var bodyHeight = $("body").outerHeight(true);
            var bodyMargin = parseInt($("body").css("margin-bottom"));

            if(windowHeight > 760) {
                $("#page-footer").css("position","fixed").css("bottom", "0");
                $("#content").css("max-height", (windowHeight - footerHeight - 55) + "px");
            }

        });

        $(window).resize(function () {
            var windowHeight = getWindowHeight();
            var footerHeight = $("#page-footer").outerHeight(true);
            var bodyHeight = $("body").outerHeight(true);
            var bodyMargin = parseInt($("body").css("margin-bottom"));

            if (windowHeight > 760) {
                $("#page-footer").css("position", "fixed").css("bottom", "0");
                $("#content").css("max-height", (windowHeight - footerHeight - 55) + "px");
            }

        });

        $("#content").resize(function () {
            var windowHeight = getWindowHeight();
            var footerHeight = $("#page-footer").outerHeight(true);
            var bodyHeight = $("body").outerHeight(true);
            var bodyMargin = parseInt($("body").css("margin-bottom"));

            if (windowHeight > 760) {
                $("#page-footer").css("position", "fixed").css("bottom","0");
                $("#content").css("max-height", (windowHeight - footerHeight - 55) + "px");
            }

        });*/

        // ### GENERAL FUNCTIONS ###

        function getWindowHeight() {
            var windowHeight = 0;
            if (typeof(window.innerHeight) == 'number') {
                windowHeight = window.innerHeight;
            }
            else {
                if (document.documentElement && document.documentElement.clientHeight) {
                    windowHeight = document.documentElement.clientHeight;
                }
                else {
                    if (document.body && document.body.clientHeight) {
                        windowHeight = document.body.clientHeight;
                    }
                }
            }
            return windowHeight;
        };

})});
