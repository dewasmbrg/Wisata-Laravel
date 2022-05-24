//upload file
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

//tabs
$(document).ready(function () {
    $("#tabs").tabs();
});

//recaptcha