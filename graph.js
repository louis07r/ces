const graph = document.getElementById("graph").getContext("2d")
const graph2 = document.getElementById("graph2").getContext("2d")

const data = {
    labels: [
        "27/04/2021",
        "28/04/2021",
        "29/04/2021",
        "30/04/2021",
    ],
    datasets: [
        {
            label: "Température",
            data: [31,34,25,39],
            backgroundColor: [
                'rgba(33, 145, 81, 0.2)',
                'rgba(33, 145, 81, 0.2)',
                'rgba(33, 145, 81, 0.2)',
                'rgba(33, 145, 81, 0.2)',
                'rgba(33, 145, 81, 0.2)',
                'rgba(33, 145, 81, 0.2)',
                'rgba(33, 145, 81, 0.2)',
                'rgba(33, 145, 81, 0.2)'
            ],
            fill: true,
            tension: 0.4,
        },
    ],
}

const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        scales: {
            y: {
                min: 0
            }
        }
    }
}

let myChart = new Chart(
    graph,
    config
);


const data2 = {
    labels: [
        "27/04/2021",
        "28/04/2021",
        "29/04/2021",
        "30/04/2021",
    ],
    datasets: [
        {
            label: "Température",
            data: [31,34,25,75],
            backgroundColor: 'rgba(33, 145, 81, 0.2)',
            fill: true,
            tension: 0.4,
        },
    ],
}

const config2 = {
    type: 'line',
    data: data2,
    options: {
        responsive: true,
        scales: {
            y: {
                min: 0
            }
        }
    }
}

let myChart2 = new Chart(
    graph2,
    config2
);
