import http from 'http'

const server = http.createServer((req, res) => {
  res.write(`Hello World from ${process.env.APPNAME}`);
  res.end();
});

server.on("request", () => console.log('Request is received by', process.env.APPNAME || 'UNKNOWN'));

server.listen(3000, () => {
  console.log('App and Running...')
});
