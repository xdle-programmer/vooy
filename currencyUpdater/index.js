const axios = require('axios').default;
const schedule = require('node-schedule');

console.log("start");

let API_KEY = '44c24040a7c44ad38f42ac24b685d475'
let LOCATION = 'http://188.225.85.66'

schedule.scheduleJob('0 0 * * *', function () {
    axios.get('https://api.currencyfreaks.com/latest?apikey=' + API_KEY + '&format=json')
        .then((response) => {
            //console.log(response.data);
            console.log("RATES: RUB");
            console.log('RUB', response.data.rates.RUB / response.data.rates.RUB);
            console.log('USD', response.data.rates.USD / response.data.rates.RUB);
            console.log('CNY', response.data.rates.CNY / response.data.rates.RUB);
            console.log('UAH', response.data.rates.UAH / response.data.rates.RUB);
            console.log('BYN', response.data.rates.BYN / response.data.rates.RUB);
            console.log('KZT', response.data.rates.KZT / response.data.rates.RUB);
            console.log('EUR', response.data.rates.EUR / response.data.rates.RUB);
            console.log('GBP', response.data.rates.GBP / response.data.rates.RUB);

            let pRUB = response.data.rates.RUB / response.data.rates.RUB;
            let pUSD = response.data.rates.USD / response.data.rates.RUB;
            let pCNY = response.data.rates.CNY / response.data.rates.RUB;
            let pUAH = response.data.rates.UAH / response.data.rates.RUB;
            let pBYN = response.data.rates.BYN / response.data.rates.RUB;
            let pKZT = response.data.rates.KZT / response.data.rates.RUB;
            let pEUR = response.data.rates.EUR / response.data.rates.RUB;
            let pGBP = response.data.rates.GBP / response.data.rates.RUB;

            let bRUB = 1 / pRUB;
            let bUSD = 1 / pUSD;
            let bCNY = 1 / pCNY;
            let bUAH = 1 / pUAH;
            let bBYN = 1 / pBYN;
            let bKZT = 1 / pKZT;
            let bEUR = 1 / pEUR;
            let bGBP = 1 / pGBP;

            axios({
                method: 'POST',
                url: `${LOCATION}/currency/update`,
                data: {
                    'price':{
                        'RUB': [pRUB, bRUB],
                        'USD': [pUSD, bUSD],
                        'CNY': [pCNY, bCNY],
                        'UAH': [pUAH, bUAH],
                        'BYN': [pBYN, bBYN],
                        'KZT': [pKZT, bKZT],
                        'EUR': [pEUR, bEUR],
                        'GBP': [pGBP, bGBP],
                    },
                },
            }).then((res) => {
                console.log('::UPDATED::');
                console.log(res.data);
            });

        })
});
