$("#loginfrm").on("submit", function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/login",
        data: $("#loginfrm").serialize(),
        success: function (data) {
           console.log(data);
           window.location.href ="/dashboard";
        },
        error: function (data) {
			console.log(data);
        },
    });
});
