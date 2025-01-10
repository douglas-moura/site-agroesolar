import './assets/css/styles.css';
import { formatoReais, economiaAcumulada, formatoKWh } from './assets/helpers/formatarNumeros';
document.getElementById('btn-menu-mobile')?.addEventListener('click', function () {
    const menuMobile = document.getElementById('menu-mobile');
    if (menuMobile)
        menuMobile.style.transform = 'translateX(0)';
});
const array = Array.from(document.getElementsByClassName('fechar-menu'));
array.forEach(element => {
    element.addEventListener('click', function () {
        const menuMobile = document.getElementById('menu-mobile');
        setTimeout(() => {
            if (menuMobile)
                menuMobile.style.transform = 'translateX(100%)';
        }, 200);
    });
});
const input = document.querySelector("#range-conta");
const tabContaAnual = document.getElementById('conta-anual');
const tabConsumo = document.getElementById('consumo');
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
    const contaAnual = numericValue * 12;
    tabContaAnual.innerHTML = formatoReais(contaAnual);
    tabConsumo.innerHTML = formatoKWh(contaAnual);
    tabAno01.innerHTML = formatoReais(contaAnual * 0.2);
    tabAno02.innerHTML = formatoReais(contaAnual * 0.2);
    tabAno03.innerHTML = formatoReais(contaAnual * 0.3);
    tabAno04.innerHTML = formatoReais(contaAnual * 0.3);
    tabAno05.innerHTML = formatoReais(contaAnual * 0.4);
    tabAno06.innerHTML = formatoReais(contaAnual * 0.4);
    tabAno07.innerHTML = formatoReais(contaAnual * 0.5);
    tabGanhoSemAplic.innerHTML = formatoReais((contaAnual * 0.2) +
        (contaAnual * 0.2) +
        (contaAnual * 0.3) +
        (contaAnual * 0.3) +
        (contaAnual * 0.4) +
        (contaAnual * 0.4) +
        ((contaAnual * 0.5) * 14));
    tabGanhoComAplic.innerHTML = formatoReais(economiaAcumulada(contaAnual));
    document.getElementById('btn-simulador').addEventListener('click', function () {
        if (numericValue > 0) {
            this.setAttribute('href', `https://api.whatsapp.com/send?phone=5511948084740&text=Ol%C3%A1!%0A%0AGostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20loca%C3%A7%C3%A3o%20de%20sistemas%20fotovoltaicos.%0A%0AO%20valor%20m%C3%A9dio%20da%20minha%20conta%20%C3%A9:%20${formatoReais(numericValue)}`);
            this.setAttribute('target', '_blank');
        }
        else {
            alert('Por favor, insira um valor maior que 0 (ZERO)');
        }
    });
});
