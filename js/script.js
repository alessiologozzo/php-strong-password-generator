let submit = document.getElementById("submit");
input = document.getElementById("input");

submit.addEventListener("click", (e) => checkInput(e));

function checkInput(e){
    let num = parseInt(input.value);

    if(Number.isNaN(num) || num < 4 || num > 50){
        e.preventDefault();
        input.value = "";
        input.placeholder = "Errore. Inserisci un numero da 4 a 50...";
    }
}
