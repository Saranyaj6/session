const validate = () => {
    const name = document.querySelector('#fname').value;
    const phone = document.querySelector('#phone').value;
    const email = document.querySelector('#email').value;
    const img = document.querySelector('#img1').files[0];
    const error = document.querySelector('#error');
    const error_email = document.querySelector('#error_email')
    const error_phone = document.querySelector('#error_phone');

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!name || !phone || !email || !img) {
      error.innerHTML = 'Please fill all fields';
      error.style.color = 'red';
      return false;
    }
    //email validation
    if (!email.match(emailPattern)) {
        error_email.innerHTML = 'Email should be in format';
        error_email.style.color = 'red';
        return false;
      }
   //end
    
    if (phone.length !== 10) {
      error.innerHTML = 'Number should be 10 digits';
      error.style.color = 'red';
      return false;
    }
    
    const formData = new FormData();
    formData.append('fname', name);
    formData.append('phone', phone);
    formData.append('email', email);
    formData.append('img1', img);
    
    const xhr = new XHRHttpRequest();
    xhr.open('POST', 'super_global.php', true);
    xhr.onreadystatechange = () => {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById('myForm').reset();
      }
    };
    xhr.send(formData);
  };
  
  document.querySelector('#submit').addEventListener('click', validate);
  