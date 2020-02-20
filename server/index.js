/*
Copyright (c) 2017, ZOHO CORPORATION
License: MIT
*/

var express = require('express');
var bodyParser = require('body-parser');
var errorHandler = require('errorhandler');
var morgan = require('morgan');
var serveIndex = require('serve-index');
var http = require('http');
var chalk = require('chalk');

process.env.PWD = process.env.PWD || process.cwd();


var expressApp = express();
var port = 5000;

expressApp.set('port', port);
expressApp.use(morgan('dev'));
expressApp.use(bodyParser.json());
expressApp.use(bodyParser.urlencoded({extended: false}));
expressApp.use(errorHandler());


expressApp.use('/', function(req, res, next) {
  res.setHeader('Access-Control-Allow-Origin', '*');
  next();
});

expressApp.get('/plugin-manifest.json', function(req, res) {
  res.sendfile('plugin-manifest.json');
});

expressApp.use('/app', express.static('app'));
expressApp.use('/app', serveIndex('app'));


expressApp.get('/', function(req, res) {
  res.redirect('/app');
});


http.createServer(expressApp).listen(port, function(){
    console.log('Zet running at ht'+'tp://127.0.0.1:' + port);
}).on('error', function(err) {
    if(err.code === 'EADDRINUSE') {
      console.log(chalk.bold.red(port + ' port is already in use'));
    }
});

