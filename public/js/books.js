$("#newfrm").on("submit", function(event) {

    const fileInput = document.getElementById('img');
    const fileIn = document.getElementById('fil');
    const libs = document.getElementById('libs').value;
    const name = document.getElementById('name').value;
    const aname = document.getElementById('aname').value;
    const auth = document.getElementById('auth').value;
    const amauth = document.getElementById('amauth').value;

    const formData = new FormData();

    formData.append('image', fileInput.files[0]);
    formData.append('fil', fileIn.files[0]);
    formData.append('name', name);
    formData.append('aname', aname);
    formData.append('auth', auth);
    formData.append('amauth', amauth);
    formData.append('libs', libs);

    event.preventDefault();
    // $.ajax({
    //     type: "POST",
    //     url: "/new_books",
    //     data: formData,
    //     processData: false, // Important for FormData
    //     contentType: false, // Important for FormData
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     success: function (data) {
    //         console.log('Success:', data);
    //     },
    //     error: function (xhr) {
    //         console.log('Error:', xhr);
    //     }
    // });
});
