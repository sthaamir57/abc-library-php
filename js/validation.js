function validateForm(e) {
    const myForm = document.forms[0];
    const myElement = myForm.elements[e];
    const myNextElement = myElement.nextElementSibling;
    const myValue = myElement.value;

    console.log("myValue");
    console.log(myValue);
    let msg;

    switch (e) {
        case 0:
            // Name
            REGEX = /([a-zA-Z][a-zA-Z]{2,12})|([a-zA-Z][a-zA-Z]{2,12}\s[a-zA-Z][a-zA-Z]{2,12})$/i;
            break;

        case 2:
            // Username
            REGEX = /^[A-Za-z][A-Za-z0-9_]{5,29}$/i;
            break;

        case 3:
            // Email
            REGEX = /^[a-z]+@[a-z]+\.(com|edu|net)+$/i;
            break;

        case 4:
            // Password
            REGEX = /[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{8,32}$/;
            break;
            
    }

    let isValid = REGEX.test(myValue);
    
    if(isValid === false) {
        myElement.classList.add('error');
        myNextElement.style.visibility = "visible";
    } else {
        myElement.classList.remove('error');
        myNextElement.style.visibility = "hidden";
    }

    if (myValue == null || myValue == "") {
        myElement.classList.remove('error');
        myNextElement.style.visibility = "hidden";
    }
}