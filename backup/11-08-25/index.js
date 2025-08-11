/******/ (() => { // webpackBootstrap
/******/ 	"use strict";

;// ./src/assets/helpers/formatarNumeros.ts
const formatoReais = (n) => {
    return n.toLocaleString("pt-BR", { style: "currency", currency: "BRL", minimumFractionDigits: 2 });
};
const formatoKWh = (n) => {
    return n.toLocaleString('pt-BR', { maximumFractionDigits: 0 }) + ' KWh';
};
const economiaAcumulada = (n) => {
    const a1 = n * 0.2;
    const a2 = a1 * 1.12 + a1 * 1.06;
    const a3 = a2 * 1.12 + a1 * 1.06 * 1.5;
    const a4 = a3 * 1.12 + a1 * 1.06 * 2;
    const a5 = a4 * 1.12 + a1 * 1.06 * 2;
    const a6 = a5 * 1.12 + a1 * 1.06 * 2;
    const a7 = a6 * 1.12 + a1 * 1.06 * 2.5;
    const a8 = a7 * 1.12 + a1 * 1.06 * 2.5;
    const a9 = a8 * 1.12 + a1 * 1.06 * 2.5;
    const a10 = a9 * 1.12 + a1 * 1.06 * 2.5;
    const a11 = a10 * 1.12 + a1 * 1.06 * 2.5;
    const a12 = a11 * 1.12 + a1 * 1.06 * 2.5;
    const a13 = a12 * 1.12 + a1 * 1.06 * 2.5;
    const a14 = a13 * 1.12 + a1 * 1.06 * 2.5;
    const a15 = a14 * 1.12 + a1 * 1.06 * 2.5;
    const a16 = a15 * 1.12 + a1 * 1.06 * 2.5;
    const a17 = a16 * 1.12 + a1 * 1.06 * 2.5;
    const a18 = a17 * 1.12 + a1 * 1.06 * 2.5;
    const a19 = a18 * 1.12 + a1 * 1.06 * 2.5;
    const a20 = a19 * 1.12 + a1 * 1.06 * 2.5;
    return a20;
};

;// ./node_modules/emailjs-com/es/store/store.js
const store = {
    _origin: 'https://api.emailjs.com',
};

;// ./node_modules/emailjs-com/es/methods/init/init.js

/**
 * Initiation
 * @param {string} userID - set the EmailJS user ID
 * @param {string} origin - set the EmailJS origin
 */
const init = (userID, origin = 'https://api.emailjs.com') => {
    store._userID = userID;
    store._origin = origin;
};

;// ./node_modules/emailjs-com/es/utils/validateParams.js
const validateParams = (userID, serviceID, templateID) => {
    if (!userID) {
        throw 'The user ID is required. Visit https://dashboard.emailjs.com/admin/integration';
    }
    if (!serviceID) {
        throw 'The service ID is required. Visit https://dashboard.emailjs.com/admin';
    }
    if (!templateID) {
        throw 'The template ID is required. Visit https://dashboard.emailjs.com/admin/templates';
    }
    return true;
};

;// ./node_modules/emailjs-com/es/models/EmailJSResponseStatus.js
class EmailJSResponseStatus {
    constructor(httpResponse) {
        this.status = httpResponse.status;
        this.text = httpResponse.responseText;
    }
}

;// ./node_modules/emailjs-com/es/api/sendPost.js


const sendPost = (url, data, headers = {}) => {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.addEventListener('load', ({ target }) => {
            const responseStatus = new EmailJSResponseStatus(target);
            if (responseStatus.status === 200 || responseStatus.text === 'OK') {
                resolve(responseStatus);
            }
            else {
                reject(responseStatus);
            }
        });
        xhr.addEventListener('error', ({ target }) => {
            reject(new EmailJSResponseStatus(target));
        });
        xhr.open('POST', store._origin + url, true);
        Object.keys(headers).forEach((key) => {
            xhr.setRequestHeader(key, headers[key]);
        });
        xhr.send(data);
    });
};

;// ./node_modules/emailjs-com/es/methods/send/send.js



/**
 * Send a template to the specific EmailJS service
 * @param {string} serviceID - the EmailJS service ID
 * @param {string} templateID - the EmailJS template ID
 * @param {object} templatePrams - the template params, what will be set to the EmailJS template
 * @param {string} userID - the EmailJS user ID
 * @returns {Promise<EmailJSResponseStatus>}
 */
const send = (serviceID, templateID, templatePrams, userID) => {
    const uID = userID || store._userID;
    validateParams(uID, serviceID, templateID);
    const params = {
        lib_version: '3.2.0',
        user_id: uID,
        service_id: serviceID,
        template_id: templateID,
        template_params: templatePrams,
    };
    return sendPost('/api/v1.0/email/send', JSON.stringify(params), {
        'Content-type': 'application/json',
    });
};

;// ./node_modules/emailjs-com/es/methods/sendForm/sendForm.js



const findHTMLForm = (form) => {
    let currentForm;
    if (typeof form === 'string') {
        currentForm = document.querySelector(form);
    }
    else {
        currentForm = form;
    }
    if (!currentForm || currentForm.nodeName !== 'FORM') {
        throw 'The 3rd parameter is expected to be the HTML form element or the style selector of form';
    }
    return currentForm;
};
/**
 * Send a form the specific EmailJS service
 * @param {string} serviceID - the EmailJS service ID
 * @param {string} templateID - the EmailJS template ID
 * @param {string | HTMLFormElement} form - the form element or selector
 * @param {string} userID - the EmailJS user ID
 * @returns {Promise<EmailJSResponseStatus>}
 */
const sendForm = (serviceID, templateID, form, userID) => {
    const uID = userID || store._userID;
    const currentForm = findHTMLForm(form);
    validateParams(uID, serviceID, templateID);
    const formData = new FormData(currentForm);
    formData.append('lib_version', '3.2.0');
    formData.append('service_id', serviceID);
    formData.append('template_id', templateID);
    formData.append('user_id', uID);
    return sendPost('/api/v1.0/email/send-form', formData);
};

;// ./node_modules/emailjs-com/es/index.js




/* harmony default export */ const es = ({
    init: init,
    send: send,
    sendForm: sendForm,
});

;// ./src/index.ts



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
es.init("1oStTlvolPOmGxroU");
document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault();
    const nome_form = document.getElementById('input-nome').value;
    const tel_form = document.getElementById('input-tel').value;
    if (nome_form !== '' && tel_form !== '') {
        es.send("service_d1s9app", "template_t4dzpwm", {
            name: nome_form,
            tel: tel_form,
            data: new Date().toLocaleDateString('pt-BR')
        })
            .then(function (response) {
            console.log('E-mail enviado com sucesso!', response);
        }, function (error) {
            console.error('Erro ao enviar e-mail', error);
        });
        const boxSimulador = document.getElementById('box-simulador');
        boxSimulador.classList.remove('hidden');
    }
    else {
        alert('Por favor, preencha todos os dados');
    }
});
const input = document.querySelector("#input-valor-conta");
const tabContaAnual = document.getElementById('conta-anual');
const tabConsumo = document.getElementById('consumo');
const tabCompra = document.getElementById('compra');
const tabAno01 = document.getElementById('ano-01');
const tabAno03 = document.getElementById('ano-03');
const tabAno05 = document.getElementById('ano-05');
const tabAno07 = document.getElementById('ano-07');
const contaAnualA20 = document.getElementById('conta-anual-a20');
const tabGanhoSemAplic = document.getElementById('ganho-sem-aplic');
const tabGanhoComAplic = document.getElementById('ganho-com-aplic');
input.addEventListener("change", function () {
});
input.addEventListener("input", (ev) => {
    const target = ev.target;
    let value = target.value;
    value = value.replace(/\D/g, "");
    value = (parseFloat(value) / 100).toLocaleString("pt-BR", {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    });
    target.value = value;
    const numericValue = parseFloat(target.value.replace(/[^0-9.-]+/g, "")) || 0;
    const contaAnual = numericValue * 12;
    tabContaAnual.innerHTML = formatoReais(contaAnual);
    tabConsumo.innerHTML = formatoKWh(contaAnual);
    tabCompra.innerHTML = formatoReais(contaAnual * 3.5);
    tabAno01.innerHTML = formatoReais(contaAnual * 0.2);
    tabAno03.innerHTML = formatoReais(contaAnual * 0.3);
    tabAno05.innerHTML = formatoReais(contaAnual * 0.4);
    tabAno07.innerHTML = formatoReais(contaAnual * 0.5);
    contaAnualA20.innerHTML = formatoReais(contaAnual * 20);
    tabGanhoSemAplic.innerHTML = formatoReais((contaAnual * 0.2) + (contaAnual * 0.2) + (contaAnual * 0.3) + (contaAnual * 0.3) + (contaAnual * 0.4) + (contaAnual * 0.4) + ((contaAnual * 0.5) * 14));
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

/******/ })()
;