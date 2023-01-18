let quantitesEl = document.querySelectorAll(".quantite");


quantitesEl.forEach(function(el){
    let inputEl = el.querySelector('input');
    let quantity = parseInt(inputEl.value, 10);
    console.log('quantity', quantity);
    let button_moins = el.querySelector('.moins');
    let button_plus = el.querySelector('.plus');

    button_moins.addEventListener('click', function(){
        quantity -= 1;
        inputEl.value = quantity;
    })
    button_plus.addEventListener('click', function(){
        quantity += 1;
        inputEl.value = quantity;
    })

})
