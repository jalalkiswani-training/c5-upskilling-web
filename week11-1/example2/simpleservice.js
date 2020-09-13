var http = require('http');
var url = require('url');

const hostname = 'localhost';
const port = 8080;

var server = http.createServer((request, response) => {
    //processing GET paramters
    var query = url.parse(request.url, true).query;
    var id = query.id;
    var name = query.name;

    //Build HTTP response
    response.statusCode = 200;
    response.setHeader('Content-Type', 'text/html');
    response.setHeader('Cache-Control', 'no-store');

    response.write(`Hello World ${name}!`); //write a response to the client
    response.end(); //end the response
}).listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});