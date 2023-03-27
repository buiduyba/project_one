var btnAllUpdate = document.querySelector('.btn-update-cart');
btnAllUpdate.disabled  = true;
btnAllUpdate.style.opacity = '0.6'; 
let arrQuanti = [];

// SetDown Quantity
function stepDown(index, id){
    resetBtnUpdateAll();
    var inputQuantity = document.querySelector('.quantity-'+ index);
    inputQuantity.value = inputQuantity.value == 1 ? 
     1 : inputQuantity.value-1;
    if(inputQuantity.value !== 1){
        inputQuantity.value
    }
    updateQuantity(id , inputQuantity.value);
}

// StepUp Quantity
function stepUp(index , id , quantity){
    console.log(quantity);
    resetBtnUpdateAll();
    btnAllUpdate.disabled  = false;
    var inputQuantity = document.querySelector('.quantity-'+ index);
    inputQuantity.value = inputQuantity.value == quantity ? quantity
     : Number(inputQuantity.value)+ 1;
    updateQuantity(id , inputQuantity.value);
}

function updateQuantity(id , quantity){
    arrQuanti = arrQuanti.filter(item => {return item.id != id } );
    let quantityUpdateItem = {
        id: id,
        quantity: quantity,
    }
    if(arrQuanti.length == 0){
        arrQuanti.push(quantityUpdateItem);
    }else{
        arrQuanti =  [...arrQuanti , quantityUpdateItem];         
    } 
}

function resetBtnUpdateAll(){
    btnAllUpdate.disabled  = false;
    btnAllUpdate.style.opacity = '1'; 
    btnAllUpdate.style.transition = "all 1s ease-in-out"; 
}

btnAllUpdate.addEventListener('click' , () => {
    var xhr = new XMLHttpRequest;
    var dataUpdate = JSON.stringify(arrQuanti);
    xhr.open('GET' , './ajax.php?url=update-cart&update=' + dataUpdate , true);
    xhr.onload = () => {
        if((xhr.readyState === XMLHttpRequest.DONE) && xhr.status == 200){
            let data = xhr.response;
        if(data === 'success'){
                location.reload();
                btnAllUpdate.disabled  = true;
                btnAllUpdate.style.opacity = '0.6'; 
            }
        }
    };
    xhr.send(dataUpdate);
})