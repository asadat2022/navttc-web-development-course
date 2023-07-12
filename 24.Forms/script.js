$(document).ready(()=>{
    $('#reg-form').submit(function (event) {
        event.preventDefault();
        let name = $('#name').val();
        $('#label-name').text(name);
    });
});