var debit = document.querySelector('[name="debit[amount]"]');
var credit = document.querySelector('[name="credit[amount]"]');
debit.onchange = function(e) {
    if(debit.value != credit.value) {
        credit.value = debit.value;
    }
}
credit.onchange = function(e) {
    if(debit.value != credit.value) {
        debit.value = credit.value;
    }
}