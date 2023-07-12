axios.get('https://jsonplaceholder.typicode.com/users')
    .then((response) => {
        var arr1 = [];
        arr1 = response.data;
        axios.get('https://jsonplaceholder.typicode.com/posts')
            .then((response) => {
                var arr2 = [];
                arr2 = response.data;
                var table = document.getElementById("table1");
                let data ='<thead class="table-dark">'+
                    '<tr>' +
                    '<th>UserId</th>' +
                    '<th>ID</th>' +
                    '<th>Name</th>' +
                    '<th>Title</th>' +
                    '<th>Body</th>' +
                    '</tr>'+
                    '</thead>';
                for (let i = 0; i < arr2.length; i++) {
                    var e = arr2[i];
                    for(let j=0;j<arr1.length;j++){
                        var f=arr1[j];
                        if(e.userId==f.id){
                            var loc=j;
                        }       
                    }
                    data +='<tbody  class="table-light">'+ 
                        '<tr>' +
                        '<td>' + e.userId + '</td>' +
                        '<td>' + e.id + '</td>' +
                        '<td>' + arr1[loc].name + '</td>' +
                        '<td>' + e.title + '</td>' +
                        '<td>' + e.body + '</td>' +
                        '</tr>'+
                        '</tbody>';

                }
                
                table.innerHTML=data;
        
            })
       
    });
