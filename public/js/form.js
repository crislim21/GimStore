const inputs = document.querySelectorAll('.input');
const loginEmail = document.getElementById('email');

function focusFunc() {
    let parent = this.parentNode.parentNode;
    console.log(loginEmail.textContent);
    parent.classList.add('focus');
}

function blurFunc() {
    let parent = this.parentNode.parentNode;
    if(this.value == "") {
        parent.classList.remove('focus');
    } else {
        parent.classList.add('focus');
    }
}

inputs.forEach(input => {

    input.addEventListener('focus', focusFunc);
    input.addEventListener('blur', blurFunc);
});
