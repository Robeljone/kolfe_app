$(document).ready(function() {
    const canvas = wrapper.querySelector("canvas");
    const signaturePad = new SignaturePad(canvas, {
      backgroundColor: 'rgb(255, 255, 255)'
    });
    $("#newfrm").on("submit", function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "/new_request",
            data: $("#newfrm").serialize(),
            success: function (data) {
               console.log(data);
            },
            error: function (data) {
                console.log(data);
            },
        });
    });
});
