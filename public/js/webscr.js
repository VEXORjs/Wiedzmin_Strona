const rp = require('require-promise');
const url = "https://pl.gear.cdprojektred.com/yennefer-the-kunoichi.html?forceRegion=pl&path=yennefer-the-kunoichi.html"

rp(url)
    .then(function(html) {
        //happens when the request goes well
        console.log(html);
    })
    .catch(function(err) {
        //handle an error when sth goes wrong 
    });