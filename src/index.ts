import './assets/css/styles.css'
import { formatoReais, economiaAcumulada, formatoKWh } from './assets/helpers/formatarNumeros'
import emailjs from 'emailjs-com';


// FUNCIONALIDADES MENU MOBILE

(document.getElementById('btn-menu-mobile') as HTMLUListElement)?.addEventListener('click', function():void {
    const menuMobile = document.getElementById('menu-mobile') as HTMLDivElement
    if (menuMobile) menuMobile.style.transform = 'translateX(0)'
})

const array = Array.from(document.getElementsByClassName('fechar-menu') as HTMLCollection)

array.forEach(element => {
    element.addEventListener('click', function ():void {
        const menuMobile = document.getElementById('menu-mobile') as HTMLDivElement        
        setTimeout(() => {
            if (menuMobile) menuMobile.style.transform = 'translateX(100%)'
        }, 200)
    })
});

// FORMULARIO PARA ABRIR SIMULADOR

/*
interface Lead {
    nome: string
    tel: string
    data: string
}

(document.getElementById('btn-ativar-simulador') as HTMLButtonElement)?.addEventListener('click', (e: Event): void => {
    e.preventDefault()
    const nome = document.getElementById('input-nome') as HTMLInputElement
    const tele = document.getElementById('input-tel') as HTMLInputElement

    axios.post("http://localhost:4000/leads", {
        nome: nome.value,
        tel: tele.value,
        data: new Date().toLocaleDateString("pt-BR")
    })
    .then((response: AxiosResponse<Lead>) => {
        console.log("Resposta:", response.data)
    })
    .catch((error: string) => {
        console.error("Erro:", error)
    })
})
*/

// SIMULADOR DE ECONOMIA ANUAL

// input valor da conta
const input = document.querySelector("#range-conta") as HTMLInputElement

// células da tabela
const tabContaAnual = document.getElementById('conta-anual')! as HTMLElement
const tabConsumo = document.getElementById('consumo')! as HTMLElement
const tabCompra = document.getElementById('compra')! as HTMLElement
const tabAno01 = document.getElementById('ano-01')! as HTMLElement
const tabAno02 = document.getElementById('ano-02')! as HTMLElement
const tabAno03 = document.getElementById('ano-03')! as HTMLElement
const tabAno04 = document.getElementById('ano-04')! as HTMLElement
const tabAno05 = document.getElementById('ano-05')! as HTMLElement
const tabAno06 = document.getElementById('ano-06')! as HTMLElement
const tabAno07 = document.getElementById('ano-07')! as HTMLElement
const contaAnualA20 = document.getElementById('conta-anual-a20')! as HTMLElement
const tabGanhoSemAplic = document.getElementById('ganho-sem-aplic')! as HTMLElement
const tabGanhoComAplic = document.getElementById('ganho-com-aplic')! as HTMLElement

// simulador
input.addEventListener("input", (ev) => {
    // pega valo da conta e converte em conta anual
    const target = ev.target as HTMLInputElement
    const numericValue = parseFloat(target.value.replace(/[^0-9.-]+/g, "")) || 0
    const contaAnual = numericValue * 12
    
    // calculos
    tabContaAnual.innerHTML = formatoReais(contaAnual)
    tabConsumo.innerHTML = formatoKWh(contaAnual)
    tabCompra.innerHTML = formatoReais(contaAnual * 3.5)
    tabAno01.innerHTML = formatoReais(contaAnual * 0.2)
    tabAno02.innerHTML = formatoReais(contaAnual * 0.2)
    tabAno03.innerHTML = formatoReais(contaAnual * 0.3)
    tabAno04.innerHTML = formatoReais(contaAnual * 0.3)
    tabAno05.innerHTML = formatoReais(contaAnual * 0.4)
    tabAno06.innerHTML = formatoReais(contaAnual * 0.4)
    tabAno07.innerHTML = formatoReais(contaAnual * 0.5)
    contaAnualA20.innerHTML = formatoReais(contaAnual * 20)
    tabGanhoSemAplic.innerHTML = formatoReais((contaAnual * 0.2) + (contaAnual * 0.2) + (contaAnual * 0.3) + (contaAnual * 0.3) + (contaAnual * 0.4) + (contaAnual * 0.4) + ((contaAnual * 0.5) * 14))
    tabGanhoComAplic.innerHTML = formatoReais(economiaAcumulada(contaAnual));

    // botão de contato
    (document.getElementById('btn-simulador') as HTMLLinkElement).addEventListener('click', function() {
        if (numericValue > 0) {
            this.setAttribute('href', `https://api.whatsapp.com/send?phone=5511948084740&text=Ol%C3%A1!%0A%0AGostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20loca%C3%A7%C3%A3o%20de%20sistemas%20fotovoltaicos.%0A%0AO%20valor%20m%C3%A9dio%20da%20minha%20conta%20%C3%A9:%20${formatoReais(numericValue)}`)
            this.setAttribute('target', '_blank')
        } else {
            alert('Por favor, insira um valor maior que 0 (ZERO)')
        }
    })
});

// Inicialize o EmailJS com seu User ID
emailjs.init("1oStTlvolPOmGxroU"); // Substitua pelo seu User ID

// Função para enviar o e-mail
(document.getElementById("contact-form") as HTMLFormElement).addEventListener("submit", function(event: Event) {
    event.preventDefault()

    const nome_form: string = (document.getElementById('input-nome') as HTMLInputElement).value
    const tel_form: string = (document.getElementById('input-tel') as HTMLInputElement).value
    
    if (nome_form !== '' && tel_form !== '') {        
        // Enviar o e-mail usando seu Service ID e Template ID
        emailjs.send("service_d1s9app", "template_t4dzpwm", {
            name: nome_form,
            tel: tel_form,
            data: new Date().toLocaleDateString('pt-BR')
        })
        .then(
            function(response) {
                console.log('E-mail enviado com sucesso!', response);
            }, function(error) {
                console.error('Erro ao enviar e-mail', error);
            }
        )
        
        const boxSimulador = document.getElementById('box-simulador') as HTMLDivElement
        boxSimulador.classList.remove('hidden')
    } else {
        alert('Por favor, preencha todos os dados')
    }
})