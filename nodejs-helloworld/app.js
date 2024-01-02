var express = require('express');
app = express();
var mysql = require('mysql');

var con = mysql.createConnection({
  host: process.env.HOST,
  user: process.env.USER,
  password: process.env.PASS
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

app.get('/', function (req, res) {
  res.send('Hello World!\n');
  res.send(con.state)
});

app.listen(8080, function () {
  console.log('Example app listening on port 8080!');
});

