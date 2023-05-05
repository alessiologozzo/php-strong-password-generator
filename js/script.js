let submit = document.getElementById("submit");
input = document.getElementById("input");

submit.addEventListener("click", (e) => checkInput(e));

function checkInput(e){
    let num = parseInt(input.value);
    console.log(input.value);

    if(typeof num == "number" && num >=4 && num <= 50){
        console.log("prova");
    }
    else{
        e.preventDefault();
        input.value = "";
        input.placeholder = "Errore. Inserisci un numero da 4 a 50...";
    }
}
