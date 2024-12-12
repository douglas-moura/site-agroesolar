import './assets/css/styles.css'

function abrirMenuMobile(): void {
    const menuMobile = document.getElementById('menu-mobile') as HTMLDivElement
    menuMobile.style.transform = 'translateX(0)'
}

function fecharMenuMobile(): void {
    const menuMobile = document.getElementById('menu-mobile') as HTMLDivElement
    setTimeout(() => {
        menuMobile.style.transform = 'translateX(100%)'
    }, 200)
}