const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [1,2,3,4,5,6,7,8,9,10,11],
        datasets: [{
            label: '# of Votes',
            data: [1000,2000,1000,3000,4000,3800,4200,4020,4250,0,650,1500],
            backgroundColor: 'blue',
            borderColor: 'blue',
            cubicInterpolationMode: 'monotone',
            
        }]
    },
    
});