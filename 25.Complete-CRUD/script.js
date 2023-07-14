$(document).ready(() => {
    var base = 'https://jsonplaceholder.typicode.com';
    axios.get(base + '/users').then((userRes) => {
        let users = userRes.data;
        users.forEach((user) => {
            var view_btn = '<button type="button" class="btn btn-link view-user-class" user-id="' + user.id + '">View</button>';
            var update_btn = '<button type="button" class="btn btn-link edit-user-class" user-id="' + user.id + '">Edit</button>';
            var delete_btn = '<button type="button" class="btn btn-link delete-user-class" user-id="' + user.id + '">Delete</button>';
            $('#user-list').append(
                '<tr>' +
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
    })

})