/**
 * Checks if an input is valid and adds a green or red border
 * 
 * @param {object|string} e 
 * @returns {boolean} 
 */


const checkInput = (e) => {

    const element = e.target ?? document.querySelector(`#${e}`);
    const id = element.id;
    let result = false;

    switch (id) {
        case "username":
            result = /[a-z0-9\-_.]{4,30}/i.test(username.value);
            break;
        case "email":
            result = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value);
            break;
        case "password":
            result = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,30}$/.test(password.value);
            break;
        case "passwordConfirm":
            result = passwordConfirm.value.length >= 6 && passwordConfirm.value === password.value;
            break;
    }

    if (result && e.target) {
        element.classList.add("valid");
        element.classList.remove("invalid");
        return true;
    } else if (!result) {
        element.classList.add("invalid");
        element.classList.remove("valid");
        return false;
    } else {
        return true;
    }
}

/**
 * Removes green border from elements
 * 
 * @param {object} e the event objecst
 */

const removeBorder = e => {
    e.target.classList.remove("valid");
}

// add event listeners to all inputs
const inputs = document.querySelectorAll("input:not([type=radio])");
for (let input of inputs) {
    input.addEventListener("keyup", checkInput);
    input.addEventListener("blur", removeBorder);
}

if (signUpForm) {
    signUpForm.addEventListener('submit', function (e) {
        let isFormValid = true;
        // if it becomes false once, it will remain false
        isFormValid = checkInput("username") && isFormValid;
        isFormValid = checkInput("email") && isFormValid;
        isFormValid = checkInput("password") && isFormValid;
        isFormValid = checkInput("passwordConfirm") && isFormValid;
        if (isFormValid) {
            alert("You're all signed up!");
        } else {
        }
    });

    signUpForm.addEventListener("reset", function () {
        const inputs = document.querySelectorAll("input, select");

        inputs.forEach(input => {
            input.className = "";
        });
    });
}