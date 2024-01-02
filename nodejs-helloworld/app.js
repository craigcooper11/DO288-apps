var express = require('express');
app = express();
var mysql = require('mysql');

var con = mysql.createConnection({
  host: process.env.HOST,
  user: process.env.USER,
  password: process.env.PASS,
  database: "sampledb"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var test = "Hi" + new Date().getTime()
  var sql = `INSERT INTO customers (name, address) VALUES ('${test}', 'Highway 37')`;
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});

con.query

app.get('/', function (req, res) {
  res.send(con.state)
});

app.listen(8080, function () {
  console.log('Example app listening on port 8080!');
});

