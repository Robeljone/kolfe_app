$("#loginfrm").on("submit", function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/login",
        data: $("#loginfrm").serialize(),
        success: function (data) {
            document.getElementById('success').classList.remove('hidden');
           setTimeout(function() {
            document.getElementById('success').classList.add('hidden');
            window.location.href='dashboard';
          }, 1000)
        },
        error: function (data) {
			console.log(data);
            document.getElementById('failed').classList.remove('hidden');
            setTimeout(function() {
                document.getElementById('failed').classList.add('hidden');
              }, 2000)
        },
    });
});
