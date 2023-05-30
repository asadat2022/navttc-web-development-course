const exp = require('express');
const cors = require('cors');
const multer = require('multer');
const bodyParser = require('body-parser');
const routes = require('./src/routes');
require("dotenv").config();


const app = exp();
const port = process.env.APP_PORT;
const form = multer();
const corsOptions = {
    origin: '*',
    credentials: true,
};

app.listen(port, function () {
    console.log("Listening at http://localhost:" + port);
})

app.get('/',function (request, response) {
    response.send("Node App is Working.")
})

app.use(cors(corsOptions))
app.use(form.array())
app.use(bodyParser.json())
app.use('/', routes.UserRoute)
