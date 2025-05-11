$("#newfrm").on("submit", function(event) {

    
    const fileInput = document.getElementById('img');
    const type = document.getElementById('type').value;
    const name = document.getElementById('name').value;
    const aname = document.getElementById('aname').value;
    const loca = document.getElementById('loca').value;
    const desc = document.getElementById('desc').value;
    const adesc = document.getElementById('adesc').value;

    const formData = new FormData();

    formData.append('image', fileInput.files[0]);
    formData.append('type', type);
    formData.append('name', name);
    formData.append('aname', aname);
    formData.append('loca', loca);
    formData.append('desc', desc);
    formData.append('adesc', adesc);

    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "/new_heritage",
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
