function formCheck(){
    // e.preventDefault();
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let EyeshadowsQuantity = document.getElementById('Eyeshadows').value;
    let LipsticksQuantity = document.getElementById('Lipsticks').value;
    let LipbalmsQuantity = document.getElementById('Lipbalms').value;
    let shippingOptions = document.getElementsByName('shipping');
    let chosenOption = "";
    if(username === ""){
        alert("Missing username");
        return false;
    }

    if(password === ""){
        alert("Missing password");
        return false;
    }

    if(EyeshadowsQuantity === "" || LipsticksQuantity === "" || LipbalmsQuantity === ""){
        alert("Missing Item Quantities");
        return false;
    }
    else{
        let i1 = parseInt(EyeshadowsQuantity);
        let i2 = parseInt(LipsticksQuantity);
        let i3 = parseInt(LipbalmsQuantity);
        if(isNaN(i1) || isNaN(i2) || isNaN(i3)){
            alert("Missing Item Quantities");
            return false;
        }
        else{
            if(i1 < 0 || i2 < 0 || i3 < 0){
                alert("Missing Item Quantities");
                return false;
            }
        }
    }

    for(let i = 0; i < shippingOptions.length; i++){
        if(shippingOptions[i].checked){
            chosenOption = shippingOptions[i].value;
            break;
        }
    }
    console.log(chosenOption)
}
