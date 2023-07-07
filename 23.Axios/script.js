
$(document).ready(function () {
    var data = '<thead><tr>' +
        '<th>ID</th>' +
        '<th>User Name</th>' +
        '<th>Title</th>' +
        '<th>Body</th>' +
        '</tr></thead>';
    axios.get("https://jsonplaceholder.typicode.com/posts")
        .then(function (post) {
            var posts = post.data;
            axios.get("https://jsonplaceholder.typicode.com/users")
                .then(function (user) {
                    var users = user.data;
                    posts.forEach(post => {
                        let obj = users.find((el) => {return el.id === post.userId});
                        let postData = post;
                        postData.user = obj;

                        data +='<tr>' +
                        '<td>' + postData.id + '</td>' +
                        '<td>' + postData.user.name + '</td>' +
                        '<td>' + postData.title + '</td>' +
                        '<td>' + postData.body + '</td>' +
                        '</tr>'

                    });
                    $('#test').html(data);
                })
        })
});

