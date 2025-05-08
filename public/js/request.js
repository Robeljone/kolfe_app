$(document).ready(function() {
    
    const wrapper = document.getElementById("signature-pad");
    const clearButton = wrapper.querySelector("[data-action=clear]");

    const canvas = wrapper.querySelector("canvas");

    canvas.addEventListener("touchstart", function(e) {
        e.preventDefault();
        // start drawing
      }, { passive: false });

    const signaturePad = new SignaturePad(canvas, {
      backgroundColor: 'rgb(255, 255, 255)',
      penColor: 'rgb(0, 0, 0)',
    });

    clearButton.addEventListener("click", () => {
        signaturePad.clear();
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
