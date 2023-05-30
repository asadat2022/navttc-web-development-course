const exp = require('express');
const app = exp();
const mysql = require('mysql');
const cors = require('cors');
const multer = require('multer');
const port = 5000;
const form = multer();

app.listen(port, function () {
    console.log("Listening on Port:" + port);
})

app.use(cors({
    origin: '*',
    credentials: true,
}))

app.use(form.array())

// const connect = mysql.createConnection({
//     host:"localhost",
//     port:"3306",
//     user:"root",
//     password:"",
//     database:"social"
// })

const connect = mysql.createConnection({
    host: "localhost",
    port: "8889",
    user: "root",
    password: "root",
    database: "social"
})
connect.connect((err) => {
    if (err) {
        console.log(err);
        return;
    }
    console.log("Connected");
})

// http://localhost:443/users
app.get('/users', (request, response) => {
    let que = "SELECT * FROM user";
    connect.query(que, function (err, result) {
        if (err) {
            console.log(err);
            return;
        }
        // console.log(result);
        response.send(result);
    });
})



app.get('/users/:id', (request, response) => {
    let que = "SELECT * FROM user WHERE id='" + request.params.id + "'";
    connect.query(que, function (err, result) {
        if (err) {
            console.log(err);
            return;
        }
        // console.log(result);
        response.send(result[0]);
    });
})



app.delete('/users/:id', (request, response) => {
    let que = "DELETE FROM user WHERE id='" + request.params.id + "'";
    connect.query(que, function (err, result) {
        if (err) {
            console.log(err);
            return;
        }
        // console.log(result);
        response.send(result);
    });
})

app.post('/users', (request, response) => {
    let user = request.body;
    // let que = "INSERT INTO user (name,username,email,phone) VALUES ('" + user.name + "','" + user.username + "','" + user.email + "','" + user.phone + "')";
    let que = "INSERT INTO user (name,username,email,phone) VALUES (?,?,?,?)";
    connect.query(que,[user.name,user.username,user.email,user.phone], function(err, addResult){
        if (err) {
            console.log(err);
            return;
        }
        let que = "SELECT * FROM user WHERE id='" + addResult.insertId + "'";
        connect.query(que, function (err, result) {
            if (err) {
                console.log(err);
                return;
            }
            response.send(result[0]);
        });
    });
})








app.patch('/users/:id', (request, response) => {
    let user = request.body;
    let user_id = request.params.id;
    // let que = "INSERT INTO user (name,username,email,phone) VALUES ('" + user.name + "','" + user.username + "','" + user.email + "','" + user.phone + "')";
    let que = "UPDATE user SET name=?, username=?,email=?,phone=? WHERE id='"+user_id+"'";
    connect.query(que,[user.name,user.username,user.email,user.phone], function(err, addResult){
        if (err) {
            console.log(err);
            return;
        }
        let que = "SELECT * FROM user WHERE id='" + addResult.insertId + "'";
        connect.query(que, function (err, result) {
            if (err) {
                console.log(err);
                return;
            }
            response.send(result[0]);
        });
    });
})