
/*
 * call other imported services, or same service but different functions here if you need to
*/
const SendSuccessResponse = async (res, data, message) => {

  const response = {
    response: 'success',
    status: true,
    data: data,
    message: message
  }
  res.status(200).send(response);
}

const SendErrorResponse = async (res, message) => {

  const response = {
    response: 'error',
    status: false,
    message: message
  }
  res.status(200).send(response);
}

module.exports = {
  SendSuccessResponse,
  SendErrorResponse
}