$("#newfrm").on("submit", function(event) {

    const fileInput = document.getElementById('img');
    const name = document.getElementById('name').value;
    const aname = document.getElementById('aname').value;
    const loc = document.getElementById('loc').value;
    const det = document.getElementById('det').value;
    const adet = document.getElementById('adet').value;

    const formData = new FormData();

    formData.append('image', fileInput.files[0]);
    formData.append('name', name);
    formData.append('aname', aname);
    formData.append('loc', loc);
    formData.append('det', det);
    formData.append('adet', adet);

    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/new_craft",
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
