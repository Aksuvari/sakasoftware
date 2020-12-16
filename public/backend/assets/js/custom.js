$(document).ready(function () {

    $(".sortable").sortable();

    $(".content-container").on('change', '.isState', function () {
        var $data = $(this).prop("checked");
        var $data_url = $(this).data("url");
        if (typeof $data !== "undefined" && $data_url !== "undefined") {
            $.post($data_url, {'_token': $('meta[name=csrf-token]').attr('content'), data: $data}, function (response) {
            });
        }
    });
    $(".content-container").on('change', '.isActive', function () {
        var $data = $(this).prop("checked");
        var $data_url = $(this).data("url");
        if (typeof $data !== "undefined" && $data_url !== "undefined") {
            $.post($data_url, {'_token': $('meta[name=csrf-token]').attr('content'), data: $data}, function (response) {
            });
        }
    });

    $(".content-container").on('change', '.sliderView', function () {
        var $data = $(this).prop("checked");
        var $data_url = $(this).data("url");
        if (typeof $data !== "undefined" && $data_url !== "undefined") {
            $.post($data_url, {'_token': $('meta[name=csrf-token]').attr('content'), data: $data}, function (response) {
            });
        }
    });

    $(".content-container").on('change', '.homePageView', function () {
        var $data = $(this).prop("checked");
        var $data_url = $(this).data("url");
        if (typeof $data !== "undefined" && $data_url !== "undefined") {
            $.post($data_url, {'_token': $('meta[name=csrf-token]').attr('content'), data: $data}, function (response) {
            });
        }
    });

    $(".content_type").change(function () {

        if ($(this).val() === "image") {

            document.getElementById('image').classList.remove("content_image");
            document.getElementById('video').classList.add("content_video");

        } else if ($(this).val() === "video") {

            document.getElementById('video').classList.remove("content_video");
            document.getElementById('image').classList.add("content_image");


        }

    });
    $(".content-container").on('sortupdate', '.sortable', function (event, ui) {
        var $data = $(this).sortable("serialize");
        var $data_url = $(this).data("url");
        $.post($data_url, {'_token': $('meta[name=csrf-token]').attr('content'), data: $data}, function (response) {
        });
    });

    $(".formuDoldur").on('click', function () {
        $("#iletisimFormu").style.display == 'block';
    });

    $(".button_usage_btn").change(function () {
        $(".button-information-container").slideToggle();
    })
    $('#mailmenu').on('click', 'li', function () {
        $(this).addClass('active').siblings().removeClass('active')
    });

    $('#sendEmail').click(function () {
        document.getElementById('sendmailDiv').style.display = "";
        document.getElementById('inbox').style.display = "none";

    });
    $('#incoming').click(function () {
        document.getElementById('sendmailDiv').style.display = "none";
        document.getElementById('inbox').style.display = "";
        document.getElementById('incomingDiv').style.display = "";
        document.getElementById('sendingDiv').style.display = "none";
        document.getElementById('deletingDiv').style.display = "none";

    });
    $('#sender').click(function () {
        document.getElementById('incomingDiv').style.display = "none";
        document.getElementById('sendingDiv').style.display = "";
        document.getElementById('deletingDiv').style.display = "none";

    });
    $('#deleting').click(function () {
        document.getElementById('incomingDiv').style.display = "none";
        document.getElementById('sendingDiv').style.display = "none";
        document.getElementById('deletingDiv').style.display = "";

    });
});
