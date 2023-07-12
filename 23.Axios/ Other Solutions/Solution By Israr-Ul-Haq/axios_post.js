data = "";
axios.get('https://jsonplaceholder.typicode.com/posts')
    .then(function (post) {
        // var row = document.getElementById("row");
        axios.get("https://jsonplaceholder.typicode.com/users")
            .then(function (res) {
                post.data.forEach(element => {
                    // console.log(user);
                    res.data.forEach(e => {
                        if (element.userId === e.id) {
                            data += '<div class="col-12 col-lg-4 col-md-4 col-sm-6 col-xl-3 mt-2 mb-5 " >' +
                                '<div class="card bg-secondary bg-gradient text-white";">' +
                                '<h4 class="p-2 text-center"> User Data</h4>' +
                                '<ul class="list-group list-group-flush">' +
                                '<li class="list-group-item">' + '<b>User name:</b>' + ' ' + e.name + '</li>' +
                                ' <li class="list-group-item">' + '<b>ID:</b>' + ' ' + element.id + '</li>' +
                                ' <li class="list-group-item">' + '<b>Title:</b>' + ' ' + element.title + '</li>' +
                                ' <li class="list-group-item">' + '<b>Body:</b>' + ' ' + element.body + '</li>' +
                                '</ul>' +
                               
                                '</div>' +
                                '</div>'
                        }
                    });
                    row.innerHTML = data;

                })

            });
        // row.innerHTML = data;
        // console.log(response);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
    .finally(function () {
        // always executed
    });


