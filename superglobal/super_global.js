const validate = () => {
  const name = document.querySelector('#fname').value;
  const phone = document.querySelector('#phone').value;
  const email = document.querySelector('#email').value;
  const img = document.querySelector('#img1').files[0];
  const error = document.querySelector('#error');
  const error_email = document.querySelector('#error_email');
  const error_phone = document.querySelector('#error_phone');

  //email validation
  form_valid(name,phone,email,img,error);
  const isValidEmail = (email, error_email) => {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      error_email.innerHTML = 'Invalid email';
      error_email.style.color = 'red';
      return false;
    } else {
      error_email.innerHTML = '';
      return true;
    }
  };
  
  const emailInput = document.querySelector('#email');
  const emailError = document.querySelector('#error_email');
  
  emailInput.addEventListener('blur', () => {
    isValidEmail(emailInput.value, emailError);
  });

  //phone validation
  const isValidPhone = (phone, error_phone) => {
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
      error_phone.innerHTML = 'Invalid phone number';
      error_phone.style.color = 'red';
      return false;
    } else {
      error_phone.innerHTML = '';
      return true;
    }
  };
  
  const phoneInput = document.querySelector('#phone');
  const phoneError = document.querySelector('#error_phone');
  
  phoneInput.addEventListener('blur', () => {
    isValidPhone(phoneInput.value, phoneError);
  });

  //form validation
  function form_valid(name,phone,email,img,error){
    if (!name || !phone || !email || !img) {
      error.innerHTML = 'Please fill all fields';
      error.style.color = 'red';
      return false;
    }
    else{
      error.innerHTML = '';
      return true;
    }
  }
  
  
  // Check email and phone validity
  const isEmailValid = isValidEmail(email, error_email);
  const isPhoneValid = isValidPhone(phone, error_phone);
  
  if (!isEmailValid || !isPhoneValid) {
    return false;
  }

  const formData = new FormData();
  formData.set('fname', name);
  formData.set('phone', phone);
  formData.set('email', email);
  formData.set('img1', img);
  
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'super_global.php', true);
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.querySelector('#myForm').reset();
    }
  };
  xhr.send(formData);
};
  
document.querySelector('#submit').addEventListener('click', validate);
