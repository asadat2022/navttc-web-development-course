

const {ExampleService} = require('../services');

/*
 * call other imported services, or same service but different functions here if you need to
*/
const ExampleMethod = async () => {
  ExampleService.ExampleMethod();
}

module.exports = {
  ExampleMethod
}