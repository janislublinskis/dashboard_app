/* Finance groups chart */
var chart = new Chart(document.getElementById("chart-groups"), {
    type: 'bar',
    data: {
        labels: [
            ['Finanšu', 'prakses grupa', '1'],
            ['Finanšu', 'prakses grupa', '2'],
            ['Finanšu', 'prakses grupa', '3'],
            ['Finanšu', 'prakses grupa', '4'],
            ['Finanšu', 'prakses grupa', '5'],
            ['Finanšu', 'prakses grupa', '6'],
            ['Finanšu', 'prakses grupa', '7'],
            ['Finanšu', 'prakses grupa', '8']
        ],
        datasets: [{
            maxBarThickness: 40,
            label: 'Depreciation of the vehicle',
            data: [20, 50, 100, 70, 100, 50, 30, 70],
            backgroundColor: '#2196f3'
        }, {
            maxBarThickness: 40,
            label: 'Fuel',
            data: [5, 20, 0, 20, 0, 15, 10, 5],
            backgroundColor: '#90caf9'
        }, {
            maxBarThickness: 40,
            label: 'Insurance and Breakdown cover',
            data: [75, 30, 0, 10, 0, 35, 60, 25],
            backgroundColor: '#f2c9fb'
        }]
    },
    options: {
        plugins: {
            stacked100: {enable: true}
        },
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                stacked: true,
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxRotation: 0,
                    minRotation: 0,
                    autoSkip: false
                },
            }],
            yAxes: [{
                stacked: true,
                display: false,
                gridLines: {
                    display: false,
                    scaleLineColor: 'transparent',
                }
            }]
        },
    }
});

/* Finance groups total */
var chart = new Chart(document.getElementById("chart-total"), {
    type: 'bar',
    data: {
        labels: [
            ['Kopā'],
        ],
        datasets: [{
            maxBarThickness: 40,
            label: 'Depreciation of the vehicle',
            data: [55],
            backgroundColor: '#0068ae'
        }, {
            maxBarThickness: 40,
            label: 'Fuel',
            data: [15],
            backgroundColor: '#2196f3'
        }, {
            maxBarThickness: 40,
            label: 'Insurance and Breakdown cover',
            data: [30],
            backgroundColor: '#e692f8'
        }]
    },
    options: {
        plugins: {
            stacked100: {enable: true}
        },
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                stacked: true,
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxRotation: 0,
                    minRotation: 0,
                    autoSkip: false
                },
            }],
            yAxes: [{
                stacked: true,
                display: false,
                gridLines: {
                    display: false,
                    scaleLineColor: 'transparent',
                }
            }]
        },
    }
});
