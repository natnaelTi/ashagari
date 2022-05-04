/* CLOSE ALERT BOXES */
$(".close").click(function () {
    $(this)
        .parent(".alert")
        .fadeOut();
});