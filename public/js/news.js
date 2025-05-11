$("#newfrm").on("submit", function(event) {

    const fileInput = document.getElementById('img');
    const title = document.getElementById('title').value;
    const atitle = document.getElementById('atitle').value;
    const auth = document.getElementById('auth').value;
    const aauth = document.getElementById('aauth').value;
    const desc = document.getElementById('desc').value;
    const adesc = document.getElementById('adesc').value;

    const formData = new FormData();

    formData.append('image', fileInput.files[0]);
    formData.append('title', title);
    formData.append('atitle', atitle);
    formData.append('auth', auth);
    formData.append('aauth', aauth);
    formData.append('desc', desc);
    formData.append('adesc', adesc);

    event.preventDefault();

    $.ajax({
        type: "POST",
        url: "/new_news",
        data: formData,
        processData: false, // Important for FormData
        contentType: false, // Important for FormData
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log('Success:', data);
        },
        error: function (xhr) {
            console.log('Error:', xhr);
        }
    });
});
