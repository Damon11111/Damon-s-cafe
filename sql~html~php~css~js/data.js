import { createConnection } from 'mysql2';



var con = createConnection({
    host: "127.0.0.1",
    user: "root",
    password: "Damon2016",
    database: "hw3"
  });
  
  con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
  });

  //insert

  // con.connect(function(err) {
  //   if (err) throw err;
  //   console.log("Connected!");
  //   //Insert a record in the "customers" table:
  //   var sql = "INSERT INTO customer (SSN,name, gender,city) VALUES ('122', 'Highway','male','Chicago')";
  //   con.query(sql, function (err, result) {
  //     if (err) throw err;
  //     console.log("1 record inserted");
  //   });
  // });

  //delete
  // con.connect(function(err) {
  //   if (err) throw err;
  //   var sql = "DELETE FROM customer WHERE SSN = '122'";
  //   con.query(sql, function (err, result) {
  //     if (err) throw err;
  //     console.log("Number of records deleted: " + result.affectedRows);
  //   });
  // });
  

  //update

  // con.connect(function(err) {
  //   if (err) throw err;
  //   var sql = "UPDATE customer SET SSN = '123' WHERE SSN = '111'";
  //   con.query(sql, function (err, result) {
  //     if (err) throw err;
  //     console.log(result.affectedRows + " record(s) updated");
  //   });
  // });


  //find

  // con.connect(function(err) {
  //   if (err) throw err;
  //   //Select only "name" and "address" from "customers":
  //   con.query("SELECT name, address FROM customers", function (err, result, fields) {
  //     if (err) throw err;
  //     console.log(result);
  //   });
  // });

