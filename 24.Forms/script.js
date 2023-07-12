$(document).ready(() => {
    $('#reg-form').submit(function (event) {
        event.preventDefault();
        $('#label-name').text($('#name').val());
        $('#label-father').text($('#father-name').val());
        $('#label-cnic').text($('#cnic').val());
        $('#label-dob').text($('#date').val());
        $('#label-email').text($('#email').val());
        $('#label-subject').text($('#subject').val());
        $('#label-gender').text($('input[name="gender"]:checked').val());
        $(this).trigger("reset");
    });
});





// jQuery(document).ready(() => {
//     jQuery('#reg-form').submit(function (event) {
//         event.preventDefault();
//         let name = jQuery('#name').val();
//         jQuery('#label-name').text(name);
//         jQuery('#name').val('');

//         // jQuery('#label-name').text(jQuery('#name').val());

//         let subject = jQuery('#subject').val();
//         console.log('subject', subject);
//         jQuery('#label-subject').text(subject);



//         let gender = jQuery('input[name="gender"]:checked').val();
//         console.log(gender);



//     });
//     $('#name').change((event) => {
//         jQuery('#label-name').text($(event.target).val());
//     })

//     $('#name').change(function () {
//         jQuery('#label-name').text($(this).val());
//     })
// });