(function () {
const quantitesEl = document.querySelectorAll(".quantite");

window.participantNumber = 0;
const maxNumber = 14;
const minNumber = 0;


quantitesEl.forEach(function(el){
    const inputEl = el.querySelector('input');
    let quantity = parseInt(inputEl.value, 10);
    console.log('quantity', quantity);
    const button_moins = el.querySelector('.moins');
    const button_plus = el.querySelector('.plus');

    button_moins.addEventListener('click', function(evt){
        evt.preventDefault();
        evt.stopPropagation();
        if (quantity !== minNumber) {
            quantity -= 1;
            window.participantNumber -= 1;
        }
        inputEl.value = quantity;
    })
    button_plus.addEventListener('click', function(evt){
        evt.preventDefault();
        evt.stopPropagation();
        if (window.participantNumber != maxNumber){
            quantity += 1;
            window.participantNumber += 1;
        }
        inputEl.value = quantity;
    })

})

})()
