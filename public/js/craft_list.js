document.addEventListener('DOMContentLoaded', function () {
    const url = window.location.href;
    const segments = url.split('/');
    const lastId = segments.pop() || segments.pop(); // Handles possible trailing slash

    console.log(lastId);
    // Set the value to an input field with id="craftId"
    document.getElementById('craftId').value = lastId;
});
$("#newfrm").on("submit", function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/new_craftlist",
        data: $("#newfrm").serialize(),
        success: function (data) {
           console.log(data);
        },
        error: function (data) {
            console.log(data);
        },
    });
});
