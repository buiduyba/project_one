var formRegister = document.querySelector('#form-register');
var formLogin = document.querySelector('#form_login');
var errorMessage = document.querySelector('.error-message');
var message = document.querySelector('.message');
if(formRegister){
    formRegister.addEventListener('submit' ,(e) => {
        e.preventDefault();
        let xhr = new XMLHttpRequest();
        xhr.open("POST", './ajax.php?url=dang-ky-save', true);
        xhr.onload = () => {
            if((xhr.readyState === XMLHttpRequest.DONE) && (xhr.status === 200)){
                let data = xhr.response;
                if (data === "success"){
                    errorMessage.style.display = "none";
                    var check = confirm('Đăng ký thành công. Bạn có muốn tiếp tục đăng nhập ?');
                    if(check){
                        location.href = './index.php?dang-nhap'
                    }
                } else {
                    errorMessage.style.display = "flex";
                    message.textContent = data;
                }
            }
        }
        let formData = new FormData(formRegister);
        xhr.send(formData);
    });
}


if(formLogin){
    formLogin.addEventListener('submit' , (e) => {
        e.preventDefault();
        let xhr = new XMLHttpRequest;
        xhr.open('POST' , './ajax.php?url=dang-nhap-save' , true);
        xhr.onload = () => {
            if(xhr.readyState === XMLHttpRequest.DONE && xhr.status == 200){
                let data = xhr.response;
                if(data === 'client'){
                    errorMessage.style.display = "none";
                    alert('Đăng nhập thành công !!!');
                    location.href = './index.php';
                }else if(data === 'admin'){
                    alert('Đăng nhập thành công !!!');
                    location.href = './../admin/index.php';
                }else{
                    errorMessage.style.display = "flex";
                    message.textContent = data;
                }
            }
        }
        var formDataLogin = new FormData(formLogin);
        xhr.send(formDataLogin);
    })
}

function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
 }

 function closeMessage(){
    errorMessage.style.display = "none";
 }