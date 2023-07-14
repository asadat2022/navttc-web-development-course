axios.get('https://jsonplaceholder.typicode.com/posts')
    .then((response) => {
        console.log(response.data);

        var tableBody = document.getElementById('table-body');
        let data = "";

        // Fetch user data for each row using a for loop
        for (let i = 0; i < response.data.length; i++) {
            const e = response.data[i];

            axios.get('https://jsonplaceholder.typicode.com/users/' + e.userId)
                .then((userResponse) => {
                    // Create a row with the data, including the name obtained
                    data += "<tr>" +
                        "<td>" + e.userId + "</td>" +
                        "<td>" + e.id + "</td>" +
                        "<td>" + e.title + "</td>" +
                        "<td>" + e.body + "</td>" +
                        "<td>" + userResponse.data.name + "</td>" + // Display the name obtained
                        "</tr>";

                    // Check if this is the last row, then append the data to the table body
                    if (i === response.data.length - 1) {
                        tableBody.innerHTML = data;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    })
    .catch((error) => {
        console.log(error);
    });
