
/*
 * call other imported services, or same service but different functions here if you need to
*/
function SendSuccessResponse (res, data, message) {

  const response = {
    response: 'success',
    status: true,
    data: data,
    message: message
  }
  res.send(response);
}

function SendErrorResponse(res, message) {

  const response = {
    response: 'error',
    status: false,
    message: message
  }
  res.send(response);
}

module.exports = {
  SendSuccessResponse,
  SendErrorResponse
}