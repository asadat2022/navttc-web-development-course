

const { UserService } = require('../services');
const { SendSuccessResponse, SendErrorResponse } = require('./base.controller');

/*
 * call other imported services, or same service but different functions here if you need to
*/
async function getAllUsers(request, response) {
  let userData = await UserService.getAllUsers()
  if (userData.status) {
    SendSuccessResponse(response, userData.data, "Get All Users Successfully")
  } else {
    SendErrorResponse(response, userData.error.message)
  }
}

async function getSpecificUser(request, response) {
  let userData = await UserService.getSpecificUser(request.params.id)
  if (userData.status) {
    SendSuccessResponse(response, userData.data, "Get User Successfully")
  } else {
    SendErrorResponse(response, userData.error.message)
  }
}

async function deleteUser(request, response) {
  let userData = await UserService.deleteUser(request.params.id)
  if (userData.status) {
    SendSuccessResponse(response, userData.data, "Delete User Successfully")
  } else {
    SendErrorResponse(response, userData.error.message)
  }
}

async function addUser(request, response) {
  let userData = await UserService.addUser(request.body)
  if (userData.status) {
    let user = await UserService.getSpecificUser(userData.data.id)
    SendSuccessResponse(response, user.data, "Add User Successfully")
  } else {
    SendErrorResponse(response, userData.error.message)
  }
}

async function editUser(request, response) {
  let userData = await UserService.editUser(request.params.id, request.body)
  if (userData.status) {
    let user = await UserService.getSpecificUser(request.params.id)
    SendSuccessResponse(response, user.data, "Update User Successfully")
  } else {
    SendErrorResponse(response, userData.error.message)
  }
}


module.exports = {
  getAllUsers,
  getSpecificUser,
  deleteUser,
  addUser,
  editUser,
}