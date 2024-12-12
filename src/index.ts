import './assets/css/styles.css'

console.log('foi')

function abrirMenuMobile() {
    const menuMobile = document.getElementById('menu-mobile') as HTMLDivElement
    menuMobile.style.transform = 'translateX(0)'
}

function fecharMenuMobile() {
    const menuMobile = document.getElementById('menu-mobile')
    setTimeout(() => {
        menuMobile!.style.transform = 'translateX(100%)'
    }, 200)
}