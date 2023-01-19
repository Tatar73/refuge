(function () {
const quantitesEl = document.querySelectorAll(".quantite");


quantitesEl.forEach(function(el){
    const inputEl = el.querySelector('input');
    let quantity = parseInt(inputEl.value, 10);
    console.log('quantity', quantity);
    const button_moins = el.querySelector('.moins');
    const button_plus = el.querySelector('.plus');

    button_moins.addEventListener('click', function(){
        evt.preventDefault();
        evt.stopPropagation();
        quantity -= 1;
        inputEl.value = quantity;
    })
    button_plus.addEventListener('click', function(){
        evt.preventDefault();
        evt.stopPropagation();
        quantity += 1;
        inputEl.value = quantity;
    })

})

})()
