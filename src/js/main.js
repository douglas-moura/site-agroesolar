const popup = document.getElementById('form-contato')

document.getElementById('btn-fechar').addEventListener('click', function () {
    popup.classList.add('hidden')
    popup.classList.remove('flex')
})

document.querySelectorAll('span.contratar-preco').forEach((elemet) => {
    elemet.addEventListener('click', () => {
        const index = elemet.attributes[0].value.substring(elemet.attributes[0].value.length - 1)
        const valor = document.getElementById(`valor-${index}`).innerText
        document.getElementById('input-valor-conta').value = valor
        popup.classList.remove('hidden')
        popup.classList.add('flex')
    })
})

document.getElementById('btn-enviar').addEventListener('click', () => {
    const nome = document.getElementById('input-nome').value
    const email = document.getElementById('input-email').value
    const tel = document.getElementById('input-tel').value
    const serv = document.getElementById('input-serv').value
    const conta = document.getElementById('input-valor-conta').value
    const msg = document.getElementById('input-msg').value

    const corpoEmail = 
    `Nome: ${nome}\n
        E-mail: ${email}\n
        Telefone: ${tel}\n
        Serviço Interessado: ${serv}\n
        Valor da Conta de Luz: ${conta}\n
        Mensagem: ${msg}`

    enviarEmail(corpoEmail)
})

function enviarEmail(content) {
    const destinatario = "douglas@gtx100.com.br"
    const assunto = "Contato"
    const corpo = content
    window.location.href = `mailto:${destinatario}?subject=${encodeURIComponent(assunto)}&body=${encodeURIComponent(corpo)}`;
    alert('E-mail enviado')
}