$("#newfrm").on("submit", function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/new_heritage",
        data: $("#newfrm").serialize(),
        success: function (data) {
           console.log(data);
        },
        error: function (data) {
            console.log(data);
        },
    });
});
