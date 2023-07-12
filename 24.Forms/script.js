jQuery(document).ready(() => {
    jQuery('#reg-form').submit(function (event) {
        event.preventDefault();
        let name = jQuery('#name').val();
        jQuery('#label-name').text(name);
        jQuery('#name').val('');

        // jQuery('#label-name').text(jQuery('#name').val());

        let subject = jQuery('#subject').val();
        console.log('subject', subject);
        jQuery('#label-subject').text(subject);



        let gender = jQuery('input[name="gender"]:checked').val();
        console.log(gender);



    });
    $('#name').change((event) => {
        jQuery('#label-name').text($(event.target).val());
    })

    $('#name').change(function () {
        jQuery('#label-name').text($(this).val());
    })
});