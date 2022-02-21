const nav = document.querySelector('.nav');
const iconMenu = document.querySelector('#icon-menu');
const ul = nav.childNodes[1];

let numerClickMenu = 0;
iconMenu.addEventListener('click', () => {
    if(numerClickMenu % 2 == 0){
        nav.classList.add('show');
        nav.classList.remove('animate__backOutUp');
        nav.classList.add('animate__backInDown');
    }else{
        setTimeout(() => {
            nav.classList.remove('show');
        }, 300);
        nav.classList.remove('animate__backInDown');
        nav.classList.add('animate__backOutUp');
    }
    numerClickMenu++;
})

ul.addEventListener('click', () => {
    setTimeout(() => {
        nav.classList.remove('show');
    }, 300);
    nav.classList.remove('animate__backInDown');
    nav.classList.add('animate__backOutUp');
    numerClickMenu++;
})

document.querySelectorAll('.project').forEach(item => {
    item.addEventListener('mouseover', () => {
        item.childNodes[3].childNodes[1].classList.add('show');
    })
    item.addEventListener('mouseout', () => {
        item.childNodes[3].childNodes[1].classList.remove('show');
    })
})