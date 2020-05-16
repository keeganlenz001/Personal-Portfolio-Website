let inputs = [];
let date = new Date().toISOString()

const addInput = (ev)=>{
    ev.preventDefault();
    let input = {
        id: date,
        fname: document.getElementById('fname').value,
        lname: document.getElementById('lname').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
    }
    inputs.push(input);
    document.forms[0].reset();
    
    localStorage.setItem('MyInputList', JSON.stringify(inputs));
    console.log(localStorage);
    }

    document.addEventListener('DOMContentLoaded', ()=>{
        document.getElementById('submit').addEventListener('click', addInput);
    })

