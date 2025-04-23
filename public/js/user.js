$("#loginfrm").on("submit", function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/new_user",
        data: $("#loginfrm").serialize(),
        success: function (data) {
           console.log(data);
           alert('Success');
        },
        error: function (data) {
			console.log(data);
            alert('Failed');
        },
    });
});
