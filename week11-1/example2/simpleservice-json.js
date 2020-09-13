var http = require('http');
var url = require('url');
var mysql = require('mysql');


var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "123456",
    database: "upskilling-db1"
});
con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
});



const hostname = 'localhost';
const port = 8080;

var server = http.createServer((request, response) => {
    //processing GET paramters
    var query = url.parse(request.url, true).query;
    var reqId = query.id;
    console.log(`Request ID: ${reqId}`);


    con.query(`SELECT * FROM students `, (err, result) => {
        if (err) {
            throw err;
        }
        //Build HTTP responsecles
        response.statusCode = 200;
        response.setHeader('Content-Type', 'text/html');
        response.setHeader('Cache-Control', 'no-store');

        response.write(JSON.stringify(result)); //write a response to the client
        response.end(); //end the response
    });


}).listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});