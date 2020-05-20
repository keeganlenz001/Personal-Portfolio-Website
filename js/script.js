let inputs = [];
let date = new Date().toISOString()

const addInput = (ev)=>{
    ev.preventDefault();
    let input = {
        id: date,
        firstName: document.getElementById('fname').value,
        lastName: document.getElementById('lname').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
    }
    
    var firstName = document.getElementById('fname');
    var lastName = document.getElementById('lname');
    var email = document.getElementById('email');
    var message = document.getElementById('message');

    if(firstName.value.length == 0) {
        window.alert('First name has not been filled in!');

    } else if (lastName.value.length == 0) {
        window.alert('Last name has not been filled in!');

    } else if (email.value.length == 0) {
        window.alert('Email has not been filled in!');

    } else if (message.value.length == 0) {
        window.alert('You have not written a message!');

    } else {

        inputs.push(input);
        document.forms[0].reset();
        
        localStorage.setItem('MyInputList', JSON.stringify(inputs));
        window.alert("Your Message Has Been Sent");
    }
}

    document.addEventListener('DOMContentLoaded', ()=>{
        document.getElementById('submit').addEventListener('click', addInput);
    })



    

    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

