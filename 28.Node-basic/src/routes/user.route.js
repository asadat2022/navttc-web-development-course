const express = require('express');

const {UserController} = require('../controllers');

const router = express.Router();

router.get('/users',UserController.getAllUsers)
router.get('/users/:id',UserController.getSpecificUser)
router.delete('/users/:id',UserController.deleteUser)
router.post('/users',UserController.addUser)
router.patch('/users/:id',UserController.editUser)

module.exports = router;