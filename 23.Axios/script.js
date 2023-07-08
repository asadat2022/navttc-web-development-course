
$(document).ready(function () {
    var data = '<thead><tr>' +
        '<th>ID</th>' +
        '<th>User Name</th>' +
        '<th>Title</th>' +
        '<th>Body</th>' +
        '<th>Action</th>' +
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
                        '<td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button></td>' +
                       
                        '</tr>'

                    });
                    $('#test').html(data);
                })
        })
});

