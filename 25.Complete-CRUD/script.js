$(document).ready(() => {
    var base = 'http://localhost:5000';
    axios.get(base + '/users').then((userRes) => {
        let users = userRes.data;
        users.forEach((user) => {
            var view_btn = '<button type="button" class="btn btn-link view-user-class" user-id="' + user.id + '">View</button>';
            var update_btn = '<button type="button" class="btn btn-link edit-user-class" user-id="' + user.id + '">Edit</button>';
            var delete_btn = '<button type="button" class="btn btn-link delete-user-class" user-id="' + user.id + '">Delete</button>';
            $('#user-list').append(
                '<tr id="user_' + user.id + '">' +
                '<td>' + user.name + '</td>' +
                '<td>' + user.username + '</td>' +
                '<td>' + user.email + '</td>' +
                '<td>' + user.phone + '</td>' +
                '<td>' + view_btn + '|' + update_btn + '|' + delete_btn + '</td>' +
                '</tr>'
            );
        })

        $('.view-user-class').click(function () {
            axios.get(base + '/users/' + $(this).attr('user-id')).then((singleUser) => {
                $('#user-view-table').html(
                    '<tr>' +
                    '<th>Name</th>' +
                    '<td>' + singleUser.data.name + '</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<th>Email</th>' +
                    '<td>' + singleUser.data.email + '</td>' +
                    '</tr>'
                );
                $('#view-user-modal').modal('show');
            })
        })



        $('.edit-user-class').click(function () {
            axios.get(base + '/users/' + $(this).attr('user-id')).then((singleUser) => {
                $('#edit-name').val(singleUser.data.name)
                $('#edit-username').val(singleUser.data.username)
                $('#edit-email').val(singleUser.data.email)
                $('#edit-user-id').val(singleUser.data.id)


                $('#edit-user').modal('show');
            })
        })
        $('#edit-submit').submit(function (event) {
            if (!$(this)[0].checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            } else {

                let data = {
                    name: $('#edit-name').val(),
                    username: $('#edit-username').val(),
                    email: $('#edit-email').val(),
                }
                axios.patch(base + '/users/' + $('#edit-user-id').val(), data).then((res) => {
                    let user = res.data;

                    var view_btn = '<button type="button" class="btn btn-link view-user-class" user-id="' + user.id + '">View</button>';
                    var update_btn = '<button type="button" class="btn btn-link edit-user-class" user-id="' + user.id + '">Edit</button>';
                    var delete_btn = '<button type="button" class="btn btn-link delete-user-class" user-id="' + user.id + '">Delete</button>';
                    $('#user_' + user.id).html('');
                    $('#user_' + user.id).html(
                        '<td>' + user.name + '</td>' +
                        '<td>' + user.username + '</td>' +
                        '<td>' + user.email + '</td>' +
                        '<td>' + user.phone + '</td>' +
                        '<td>' + view_btn + '|' + update_btn + '|' + delete_btn + '</td>'
                    );
                })
                event.preventDefault();
            }

            $(this).addClass("was-validated");
            $('#edit-user').modal('hide');
        })



        $('.delete-user-class').click(function () {
            $('#delete-user-id').val($(this).attr('user-id'))
            $('#delete-user').modal('show');
        })

        $('#delete-submit').click(function () {

            axios.delete(base + '/users/' + $('#delete-user-id').val())
            .then((singleUser) => {
                $('#user_' + $('#delete-user-id').val()).remove();
                $('#delete-user').modal('hide');

                $('#success-msg').text('User Deleted Successfully');
                $('#success-msg').toggleClass('d-none');

                setTimeout(() => {
                    
                $('#success-msg').toggleClass('d-none');
                }, 2000);
            })
        })
    })

})