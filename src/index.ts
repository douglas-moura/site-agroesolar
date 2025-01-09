import './assets/css/styles.css'
import { economiaConta, Conta } from './assets/helpers/economiaConta'
import { montarGrafico } from './assets/helpers/graficoEconomia'

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

const input = document.querySelector("#range-conta") as HTMLInputElement

const tabContaMensal = document.getElementById('conta-mensal') as HTMLElement
const tabConsumo = document.getElementById('consumo') as HTMLElement
const tabCompra = document.getElementById('compra') as HTMLElement
const tabAno01 = document.getElementById('ano-01') as HTMLElement
const tabAno02 = document.getElementById('ano-02') as HTMLElement
const tabAno03 = document.getElementById('ano-03') as HTMLElement
const tabAno04 = document.getElementById('ano-04') as HTMLElement
const tabAno05 = document.getElementById('ano-05') as HTMLElement
const tabAno06 = document.getElementById('ano-06') as HTMLElement
const tabAno07 = document.getElementById('ano-07') as HTMLElement
const tabGanhoSemAplic = document.getElementById('ganho-sem-aplic') as HTMLElement
const tabGanhoComAplic = document.getElementById('ganho-com-aplic') as HTMLElement

input.addEventListener("input", (ev) => {
    const target = ev.target as HTMLInputElement
    const numericValue = parseFloat(target.value.replace(/[^0-9.-]+/g, "")) || 0
    let data: number[] = []
    
    for (let i = 0; i < economiaConta.length; i++) {
        const contaAtual: Conta = economiaConta[i]     

        if (contaAtual.ContaMensal == numericValue) {
            tabContaMensal.innerHTML = contaAtual.ContaMensal.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabConsumo.innerHTML = contaAtual.Consumo
            tabCompra.innerHTML = contaAtual.Investimento.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabAno01.innerHTML = contaAtual.EconomiaAno01.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabAno02.innerHTML = contaAtual.EconomiaAno02.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabAno03.innerHTML = contaAtual.EconomiaAno03.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabAno04.innerHTML = contaAtual.EconomiaAno04.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabAno05.innerHTML = contaAtual.EconomiaAno05.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabAno06.innerHTML = contaAtual.EconomiaAno06.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabAno07.innerHTML = contaAtual.EconomiaAno07.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabGanhoSemAplic.innerHTML = contaAtual.GanhoTotalSemAplicacao.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
            tabGanhoComAplic.innerHTML = contaAtual.GanhoTotalComAplicacao.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})

            data = [
                contaAtual.EconomiaAno01,
                contaAtual.EconomiaAno02,
                contaAtual.EconomiaAno03,
                contaAtual.EconomiaAno04,
                contaAtual.EconomiaAno05,
                contaAtual.EconomiaAno06,
                contaAtual.EconomiaAno07,
            ]
        }
    }


    // Criação do gráfico
    montarGrafico(data)
})

window.addEventListener('load', () => {

    const data: number[] = [0, 0, 0, 0, 0, 0, 0]

    // Criação do gráfico
    montarGrafico(data)
})