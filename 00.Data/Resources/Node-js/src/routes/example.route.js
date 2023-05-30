const express = require('express');

const {ExampleController} = require('../controllers');

const router = express.Router();

router.get('/example', ExampleController.ExampleMethod);

module.exports = router;