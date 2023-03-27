var index = 0;

function dropdown() {
    index++;
    console.log(index);
    if(index % 2 == 0){
        document.getElementById("myDropdown").style.display="none";
    }else{
        document.getElementById("myDropdown").style.display="block";
    }
}