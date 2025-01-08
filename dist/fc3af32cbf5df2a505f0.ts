var _a;
import './assets/css/styles.css';
import Chart from 'chart.js/auto';
import { economiaConta } from './assets/helpers/economiaConta';
(_a = document.getElementById('btn-menu-mobile')) === null || _a === void 0 ? void 0 : _a.addEventListener('click', function () {
    const menuMobile = document.getElementById('menu-mobile');
    menuMobile.style.transform = 'translateX(0)';
});
const array = Array.from(document.getElementsByClassName('fechar-menu'));
array.forEach(element => {
    element.addEventListener('click', function () {
        const menuMobile = document.getElementById('menu-mobile');
        setTimeout(() => {
            menuMobile.style.transform = 'translateX(100%)';
        }, 200);
    });
});
const input = document.querySelector("#range-conta");
const tabContaMensal = document.getElementById('conta-mensal');
const tabConsumo = document.getElementById('consumo');
const tabCompra = document.getElementById('compra');
const tabAno01 = document.getElementById('ano-01');
const tabAno02 = document.getElementById('ano-02');
const tabAno03 = document.getElementById('ano-03');
const tabAno04 = document.getElementById('ano-04');
const tabAno05 = document.getElementById('ano-05');
const tabAno06 = document.getElementById('ano-06');
const tabAno07 = document.getElementById('ano-07');
const tabGanhoSemAplic = document.getElementById('ganho-sem-aplic');
const tabGanhoComAplic = document.getElementById('ganho-com-aplic');
input.addEventListener("input", (ev) => {
    const target = ev.target;
    const numericValue = parseFloat(target.value.replace(/[^0-9.-]+/g, "")) || 0;
    for (let i = 0; i < economiaConta.length; i++) {
        const contaAtual = economiaConta[i];
        if (contaAtual.ContaMensal == numericValue) {
            tabContaMensal.innerHTML = contaAtual.ContaMensal.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabConsumo.innerHTML = contaAtual.Consumo;
            tabCompra.innerHTML = contaAtual.Investimento.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabAno01.innerHTML = contaAtual.EconomiaAno01.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabAno02.innerHTML = contaAtual.EconomiaAno02.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabAno03.innerHTML = contaAtual.EconomiaAno03.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabAno04.innerHTML = contaAtual.EconomiaAno04.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabAno05.innerHTML = contaAtual.EconomiaAno05.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabAno06.innerHTML = contaAtual.EconomiaAno06.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabAno07.innerHTML = contaAtual.EconomiaAno07.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabGanhoSemAplic.innerHTML = contaAtual.GanhoTotalSemAplicacao.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
            tabGanhoComAplic.innerHTML = contaAtual.GanhoTotalComAplicacao.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
        }
    }
});
window.addEventListener('load', () => {
    const canvas = document.getElementById('myChart');
    if (!canvas) {
        console.error('Canvas não encontrado.');
        return;
    }
    const ctx = canvas.getContext('2d');
    if (!ctx) {
        console.error('Contexto 2D não pôde ser obtido.');
        return;
    }
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Ano 01', 'Ano 02', 'Ano 03', 'Ano 04', 'Ano 05', 'Ano 06', 'Ano 07 ao 20'],
            datasets: [
                {
                    label: 'Economia por ano',
                    data: [28800, 28800, 43200, 43200, 57600, 57600, 72000],
                    backgroundColor: '#B3DE00',
                    borderColor: '#B3DE00',
                    borderWidth: 4,
                },
            ],
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function (value, index, ticks) {
                            return value.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
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
    });
});
