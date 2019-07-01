var mysql = require('mysql');
var con = mysql.createConnection({
  host: "localhost",
  user: "andruw",
  password: "a16i14z12"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Result: " + result);
  });
});