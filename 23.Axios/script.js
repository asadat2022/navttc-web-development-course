
$(document).ready(function(){
    axios
        .get("https://jsonplaceholder.typicode.com/posts",{headers: {'Content-type': 'application/json; charset=UTF-8'}})
        .then(function (post) {
            posts = post.data;
            axios
                .get("https://jsonplaceholder.typicode.com/users",{headers: {'Content-type': 'application/json; charset=UTF-8'}})
                .then(function (user) {
                    var users = user.data;
                    $.each(posts,function (pindex, post) {
                        let selectuser = null;
                        $.each(users , function (uindex, user) {
                            if (post.userId === user.id){
                                selectuser = user;
                                return false;
                            }
                        });
                        display(post,selectuser);
                    });
                })
                .catch(err => console.error(err));
        })
        .catch(err => console.error(err));
});