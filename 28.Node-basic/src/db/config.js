const mysql = require('mysql');
require("dotenv").config();

const connect = mysql.createConnection({
    host: process.env.DB_HOST,
    port: process.env.DB_PORT,
    user: process.env.DB_USERNAME,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE
  })
  connect.connect((err) => {
    if (err) {
        if (err.sqlMessage) {
            console.log(err.sqlMessage);
            return;
        }
        console.log("Unable To Connect with Database: " + process.env.DB_DATABASE);
      return;
    }
    console.log("Connected With Database \""+process.env.DB_DATABASE+"\" on Port: " + process.env.DB_PORT);
    return;
  })


  module.exports = {
    connect,
  }