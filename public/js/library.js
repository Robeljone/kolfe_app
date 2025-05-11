$("#newfrm").on("submit", function(event) {

    const fileInput = document.getElementById('img');
    const name = document.getElementById('name').value;
    const aname = document.getElementById('aname').value;
    const map = document.getElementById('map').value;
    const des = document.getElementById('des').value;
    const ades = document.getElementById('ades').value;

    const formData = new FormData();

    formData.append('image', fileInput.files[0]);
    formData.append('name', name);
    formData.append('aname', aname);
    formData.append('map', map);
    formData.append('des', des);
    formData.append('ades', ades);

    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/new_library",
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
