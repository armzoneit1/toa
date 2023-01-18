const axios = require('axios').default;
const url = 'https://your-api-server';

setInterval(()=>{
axios.get('http://localhost/toa/broadcast').then((response) => {
  // handle success
  console.log("running...");
})
.catch((error) => {
  // handle errors
});
  axios.get('http://localhost/toa/broadcast/sou').then((response) => {
    // handle success
    console.log("running1...");
  })
      .catch((error) => {
        // handle errors
      });
},1000);