$("#newfrm").on("submit", function(event) {
    
    const fileInput = document.getElementById('img');
    const name = document.getElementById('name').value;
    const type = document.getElementById('type').value;
    const dest= document.getElementById('dest').value;

    const formData = new FormData();

    formData.append('image', fileInput.files[0]);
    formData.append('name', name);
    formData.append('type', type);
    formData.append('dest', dest);

    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/new_destination",
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
