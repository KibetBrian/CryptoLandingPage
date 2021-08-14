// Price History Chart 
var ctx = document.getElementById('myChart').getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June','July'],
        datasets: [{
            label: 'Price: Ksh',
            backgroundColor: "#fff",
            borderWidth: 1,
            data: [0.00, 0.015, 0.011, 0.013, 0.005, 0.021],
            backgroundColor: [
                '#63cc71',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                '#63cc71',
                'rgb(249, 183, 7)',
                'rgb(249, 183, 7)',
                '#63cc71',
                '#185ADB',
                '#ffffff'
            ],
            borderWidth: 1
        }]
    },
    options: {
       plugins:
       {
           legend:
           {
               display:true,
               labels:
               {
                   color: '#ffffff'
               }
           }
       },
       scales: 
       {
           y:
           {
               ticks:
               {
                   color: "#ffffff"
               },
               grid:
               {
                   borderColor:"#ffffff",
               }
           },
           x:
           {
               ticks:
               {
                   color:"#ffffff"
               },
               grid:
               {
                   borderColor: "#ffffff",
               }
           }
       }
    }
});

//Doughnut chart
var doughnut = document.getElementById('myCirularChart').getContext('2d');

const data = {
    labels: [
      'Bitcoin',
      'Etherium',
      'Litecoin',
      'tr3xCoin'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [75, 25, 12.5, 16.5],
      backgroundColor: [
        'rgb(249, 183, 7)',
        '#c99d66',        
        '#185ADB',
        '#63cc71'
        
      ],
      hoverOffset: 4
    }]
  };

var myCirularChart= new Chart(doughnut, {
    type: 'doughnut',
    data: data,
    options:
    {
        plugins:
        {
            legend:
            {
                display: true,
                labels:
                {
                    color:"#ffffff"
                }
            }
        }
    }
});

//Count down

const countDown = ()=>
{
    const targetDate = new Date ("Feb 1, 2022 00:00:00").getTime();
    const timeNow = Date.now();
    const timeRemaining = targetDate - timeNow;

    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    const daysRemaining = Math.floor(timeRemaining / day);
    const hoursRemaining = Math.floor((timeRemaining % day) / hour);
    const minutesRemaining = Math.floor((timeRemaining % hour)/minute)
    const secondsRemaining = Math.floor((timeRemaining % minute) / second)

    document.querySelector('.d').innerHTML = daysRemaining;
    document.querySelector('.h').innerHTML = hoursRemaining;
    document.querySelector('.m').innerHTML = minutesRemaining;
    document.querySelector('.s').innerHTML = secondsRemaining;
}

setInterval(countDown,1000);

//Snackbar

const downloadButton = document.querySelector('.downloadButton');
const snackBar = document.querySelector('.snack-bar');

downloadButton.onclick = ()=>
{
    snackBar.classList.add ("snack-bar-show");
}
setInterval(removeSnackBar,2000);
    function removeSnackBar ()
        {
             snackBar.className = snackBar.className.replace("show", "");

        }

//Subscription form

const subscriptionForm = document.querySelector(".subscribe-form");
const formControl = document.getElementById('subscribe-form');



