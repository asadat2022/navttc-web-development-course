$(document).ready(() => {
    $('#reg-form').submit(function (event) {
        if (!$(this)[0].checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        } else {
            $('#label-name').text($('#name').val());
            $('#label-father').text($('#father-name').val());
            $('#label-cnic').text($('#cnic').val());
            let inputDate = $('#date').val()
            let date = new Date(inputDate);
            $('#label-dob').text(date.toDateString('en-PK'));
            $('#label-email').text($('#email').val());
            $('#label-subject').text($('#subject').val());
            $('#label-gender').text($('input[name="gender"]:checked').val());

            event.preventDefault();
        }

        $(this).addClass("was-validated");
        // $(this).trigger("reset");
    });

    // $('#test').click(function () {
    //     $(this).attr('disabled', true);
    // })
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