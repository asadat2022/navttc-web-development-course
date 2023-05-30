const { connect } = require('../db/config');

async function getAllUsers() {
  let que = "SELECT * FROM user";
  return new Promise(function (resolve, reject) {
    connect.query(que, (err, result) => {
      if (err) {
        resolve({ status: false, error: { message: err.sqlMessage } });// when error
        return;
      }
      resolve({ status: true, data: result });// when successful
      return;
    });
  });
}

async function getSpecificUser(id) {
  let que = "SELECT * FROM user WHERE id='" + id + "'";
  return new Promise(function (resolve, reject) {
    connect.query(que, (err, result) => {
      if (err) {
        resolve({ status: false, error: { message: err.sqlMessage } });// when error
        return;
      }
      if (result.length > 0) {
        resolve({ status: true, data: result[0] });// when successful
        return;
      }
      resolve({ status: false, error: { message: 'User Not Found' } });// when error
      return;
    });
  });
}


async function deleteUser(id) {
  let que = "DELETE FROM user WHERE id='" + id + "'";
  return new Promise(function (resolve, reject) {
    connect.query(que, (err, result) => {
      if (err) {
        resolve({ status: false, error: { message: err.sqlMessage } });// when error
        return;
      }
      if (result.affectedRows > 0) {
        resolve({ status: true, data: '' });// when successful
        return;
      }
      resolve({ status: false, error: { message: 'User Not Found' } });// when error
      return;
    });
  });
}


async function addUser(user) {
  let que = "INSERT INTO user (name,username,email,phone) VALUES (?,?,?,?)";
  return new Promise(function (resolve, reject) {
    connect.query(que, [user.name, user.username, user.email, user.phone], (err, result) => {
      if (err) {
        resolve({ status: false, error: { message: err.sqlMessage } });// when error
        return;
      }
      if (result.affectedRows > 0) {
        resolve({ status: true, data: { id: result.insertId } });// when successful
        return;
      }
      resolve({ status: false, error: { message: 'Unable To Add User' } });// when error
      return;
    });
  });
}

async function editUser(id, user) {
  let que = "UPDATE user SET name=?, username=?,email=?,phone=? WHERE id='" + id + "'";
  return new Promise(function (resolve, reject) {
    connect.query(que, [user.name, user.username, user.email, user.phone], (err, result) => {
      console.log(err, result);
      if (err) {
        resolve({ status: false, error: { message: err.sqlMessage } });// when error
        return;
      }
      if (result.affectedRows > 0) {
        resolve({ status: true, data: { id: result.insertId } });// when successful
        return;
      }
      resolve({ status: false, error: { message: 'Unable To Update User' } });// when error
      return;
    });
  });
}


module.exports = {
  getAllUsers,
  getSpecificUser,
  deleteUser,
  addUser,
  editUser
}