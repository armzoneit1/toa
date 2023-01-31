const axios = require('axios').default;
const url = 'https://your-api-server';
process.env.NODE_TLS_REJECT_UNAUTHORIZED = 0;

setInterval(()=>{
axios.get('https://localhost/toas/broadcast').then((response) => {
  // handle success
  console.log("running...");
})
.catch((error) => {
  // handle errors
  console.log(error);
});
},1000);