var step1aTimer = 15000;
var step2aTimer = 10000;
var step3aTimer = 5000;
var second = 1000;

$(document).ready(function() {
    sessionStorage['step'] = 'step1a';
    // sessionStorage['step'] = 'step3b';
    $("#" + sessionStorage['step']).addClass("active");

    var value = 0;
    var timer = setInterval(function () {
        value += 100 / (step1aTimer / second);
        var bar = document.getElementsByClassName("ldBar").item(0).ldBar;
        bar.set(value);
    }, second);
      
    setTimeout(function() {
        clearInterval(timer);
        $("#step1a").removeClass("holded");
        $("#step1a").removeClass("active");
        $("#info").removeClass("active");
        $("#step1b").addClass("active");

        sessionStorage['step'] = 'step1b';
    }, step1aTimer + second);

    $("#iconInfo").click(function() {
        if ($("#info").hasClass("active")) {
            $("#info").removeClass("active");
            $("#workArea .holded").addClass("active");
            $("#workArea .holded").removeClass("holded");
        } else {
            $("#workArea .active").addClass("holded");
            $("#workArea .active").removeClass("active");
            $("#info").addClass("active");
        }
    });

    $("#info .item").click(function() {
        if ($(".description", $(this)).hasClass("visible")) {
            $(".description", $(this)).removeClass("visible");
            $(".state", $(this)).html("+");
        } else {
            $(".description", $(this)).addClass("visible");
            $(".state", $(this)).html("-");
        }
    });

    $(".sphere").click(function() {
        sessionStorage['color'] = '';

        if ($(this).hasClass("picker")) {
            // $(this).removeClass("picker");
            // $(this).html("");
        } else {
            $(".sphere.picker").each(function() {
                if ($(this).hasClass("picker")) {
                    $(this).removeClass("picker");
                    $(this).html("");
                }
            });

            var classList = $(this).attr("class").split(/\s+/);
            $.each(classList, function(index, item) {
                if (item.indexOf("bg-") === 0) {
                    sessionStorage['color'] = item.substring(3);
                    return false;
                }
            });

            $(this).addClass("picker");
            $(this).html('<img src="img/picker_full.png" alt="Picker" />');
        }
    });

    $("#step1b .buttonContinue").click(function() {
        if ($(".sphere.picker").length) {
            sessionStorage['step'] = 'step2a';

            $("#step1b").removeClass("active");
            $("#step2a").addClass("active");

            var bar = new ldBar("#step2a .progressBarContainer");
            $("#step2a .progressBarContainer .lbBar").addClass("label-center");

            value = 0;
            var timer = setInterval(function () {
                value += 100 / (step2aTimer / second);
                var bar = document.getElementsByClassName("ldBar").item(1).ldBar;
                bar.set(value);
            }, second);

            setTimeout(function() {
                clearInterval(timer);
                $("#step2a").removeClass("holded");
                $("#step2a").removeClass("active");
                $("#info").removeClass("active");
                $("#step2b").addClass("active");

                sessionStorage['step'] = 'step2b';
            }, step2aTimer + second);
        } else {
            $("#step1b").addClass("hidden");
            $("#step1c").addClass("active");
        }
    });

    $("#step1c .buttonOk").click(function() {
        $("#step1c").removeClass("active");
        $("#step1b").removeClass("hidden");
        $("#step1b").addClass("active");
    });

    $("#step2b .icon").click(function() {
        sessionStorage['animal'] = '';

        if ($(this).hasClass("picker")) {
            // $(this).removeClass("picker");
            // $(this).html("");
        } else {
            $(".icon.picker").each(function() {
                if ($(this).hasClass("picker")) {
                    $(this).removeClass("picker");
                    $(this).html("");
                }
            });

            var classList = $(this).attr("class").split(/\s+/);
            $.each(classList, function(index, item) {
                if (item.indexOf("icon-") === 0) {
                    sessionStorage['animal'] = item;
                    return false;
                }
            });

            $(this).addClass("picker");
            $(this).html('<img src="img/picker_full.png" alt="Picker" />');
        }
    });

    $("#step2b .buttonContinue").click(function() {
        if ($("#step2b .icon.picker").length) {
            sessionStorage['step'] = 'step3a';

            $("#step2b").removeClass("active");
            $("#step3a").addClass("active");

            var bar = new ldBar("#step3a .progressBarContainer");
            $("#step3a .progressBarContainer .lbBar").addClass("label-center");

            value = 0;
            var timer = setInterval(function () {
                value += 100 / (step3aTimer / second);
                var bar = document.getElementsByClassName("ldBar").item(2).ldBar;
                bar.set(value);
            }, second);

            setTimeout(function() {
                clearInterval(timer);
                $("#step3a").removeClass("holded");
                $("#step3a").removeClass("active");
                $("#info").removeClass("active");
                $("#step3b").addClass("active");

                sessionStorage['step'] = 'step3b';

                $("#step3b .animal").addClass(sessionStorage['animal']);
                $("#step3b .animal").addClass(sessionStorage['color']);
            }, step3aTimer + second);
        } else {
            $("#step2b").addClass("hidden");
            $("#step2c").addClass("active");
        }
    });

    $("#step2c .buttonOk").click(function() {
        $("#step2c").removeClass("active");
        $("#step2b").removeClass("hidden");
        $("#step2b").addClass("active");
    });

    $("#step3b input:checkbox").click(function() {
        var value = $(this).prop('checked');
        $("#step3b .checkboxLine input:checkbox").prop('checked', value);
        $("#step3b .checkboxLineMobile input:checkbox").prop('checked', value);
    });

    $("#step3b .buttonAccept").click(function() {
        if ($("#step3b .checkboxLine input:checkbox").prop('checked')) {
            window.location.replace("http://captive.apple.com");
        } else {
            $("#step3b").addClass("hidden");
            $("#step3c").addClass("active");
        }
    });

    $("#step3c .buttonOk").click(function() {
        $("#step3c").removeClass("active");
        $("#step3b").removeClass("hidden");
        $("#step3b").addClass("active");
    });

});