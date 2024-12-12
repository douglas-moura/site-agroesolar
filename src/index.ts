import './assets/css/styles.css'

(document.getElementById('btn-menu-mobile') as HTMLUListElement).addEventListener('click', function():void {
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