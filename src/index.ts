import './assets/css/styles.css'
import Chart from 'chart.js/auto'

(document.getElementById('btn-menu-mobile') as HTMLUListElement)?.addEventListener('click', function():void {
    const menuMobile = document.getElementById('menu-mobile') as HTMLDivElement
    menuMobile.style.transform = 'translateX(0)'
})

const array = Array.from(document.getElementsByClassName('fechar-menu') as HTMLCollection)

array.forEach(element => {
    element.addEventListener('click', function ():void {
        const menuMobile = document.getElementById('menu-mobile') as HTMLDivElement        
        setTimeout(() => {
            menuMobile.style.transform = 'translateX(100%)'
        }, 200)
    })
})

window.addEventListener('load', () => {
    const canvas = document.getElementById('myChart') as HTMLCanvasElement;

    if (!canvas) {
        console.error('Canvas não encontrado.');
        return
    }

    const ctx = canvas.getContext('2d');
    if (!ctx) {
        console.error('Contexto 2D não pôde ser obtido.');
        return
    }

    // Criação do gráfico
    const myChart = new Chart(ctx, {
        type: 'line', // Tipo do gráfico
        data: {
            labels: ['Ano 01', 'Ano 02', 'Ano 03', 'Ano 04', 'Ano 05', 'Ano 06', 'Ano 07 ao 20'], // Labels do eixo X
            datasets: [
                {
                    label: 'Economia por ano',
                    data: [28800, 28800, 43200, 43200, 57600, 57600, 72000], // Dados do eixo Y
                    backgroundColor: '#B3DE00',
                    borderColor: '#B3DE00',
                    borderWidth: 4,
                },
            ],
        },
        options: {
            responsive: true, // Ajusta o tamanho automaticamente
            scales: {
                y: {
                    beginAtZero: true, // Começa o eixo Y do zero
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, ticks) {
                            return value.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                        }
                    }
                },
            },
            plugins: {
                title: {
                    text: 'ECONOMIA NAS CONTAS DE ELETRICIDADE SE 1kW = R$ 1,00 (em R$)',
                    display: true,
                    padding: {
                        top: 10,
                        bottom: 30
                    }
                },
                legend: {
                    align: 'center',
                    position: 'bottom',
                    labels: {
                        padding: 10
                    },
                }
            },
            elements: {
                point: {
                    pointStyle: 'circle',
                    radius: 6
                },
                line: {
                    tension: 0.4
                }
            }
        },
    })
})