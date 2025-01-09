import Chart from 'chart.js/auto'
import ChartDataLabels from 'chartjs-plugin-datalabels'


let myChart: Chart | null = null

export const montarGrafico = (dados: number[]): any => {    
    Chart.register(ChartDataLabels)
    const canvas = document.getElementById('myChart') as HTMLCanvasElement;

    if (myChart) {
        myChart.destroy();
    }

    if (!canvas) {
        console.error('Canvas não encontrado.');
        return
    }

    const ctx = canvas.getContext('2d');
    if (!ctx) {
        console.error('Contexto 2D não pôde ser obtido.');
        return
    }

    myChart = new Chart(ctx, {
        type: 'line', // Tipo do gráfico
        data: {
            labels: ['Ano 01', 'Ano 02', 'Ano 03', 'Ano 04', 'Ano 05', 'Ano 06', 'Ano 07 ao 20'], // Labels do eixo X
            datasets: [
                {
                    label: 'Economia por ano',
                    data: dados, // Dados do eixo Y
                    backgroundColor: '#B3DE00',
                    borderColor: '#B3DE00',
                    borderWidth: 2,
                },
            ],
        },
        options: {
            responsive: true, // Ajusta o tamanho automaticamente
            maintainAspectRatio: false, // Permite alterar a proporção
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
                        bottom: 20
                    },
                    font: {
                        size: 18
                    }
                },
                legend: {
                    align: 'center',
                    position: 'top',
                },
                datalabels: {
                    display: true, // Exibe os rótulos
                    color: 'black', // Cor dos rótulos
                    font: {
                        weight: 'bold',
                        size: 12,
                    },
                    align: 'top', // Posição do rótulo em relação ao ponto
                    formatter: (dados) => `${dados.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}`, // Formata o valor exibido
                }
            },
            elements: {
                point: {
                    pointStyle: 'circle',
                    radius: 3
                },
                line: {
                    tension: 0.4
                }
            }
        },
    })
}