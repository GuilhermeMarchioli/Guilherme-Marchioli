function mudouTamanho() {
    if (window.innerWidth >= 768) {
    itens.style.display = 'none'
    } else {
        itens.style.display = 'block'
    }
}

function clickMenu() {
   if (itens.style.display == 'block') {
    itens.style.display = 'none'
   } else {
    itens.style.display = 'block'
   }
}