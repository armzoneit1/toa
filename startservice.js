const axios = require('axios').default;
const url = 'https://your-api-server';
process.env.NODE_TLS_REJECT_UNAUTHORIZED = 0;

function connect1(){
  return axios.get('https://localhost/toa/broadcast');
}
function connect2(){
  return axios.get('https://localhost/toa/broadcast2');
}
function connect3(){
  return axios.get('https://localhost/toa/broadcast3');
}
function connect4(){
  return axios.get('https://localhost/toa/broadcast4');
}
function connect5(){
  return axios.get('https://localhost/toa/broadcast5');
}

setInterval(()=>{
  Promise.allSettled([connect1(), connect2(), connect3(), connect4(), connect5()]).then(function (response) {
    console.log("Running...");
  }).catch(www=>{
    console.log(www);
  });
},1000);