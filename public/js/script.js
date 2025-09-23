alert("Hello Please Fillthe Form !");
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    // error message container create karna
    const errorBox = document.createElement("div");
    errorBox.style.color = "red";
    errorBox.style.marginBottom = "10px";
    form.parentNode.insertBefore(errorBox, form); // form ke upar show karne ke liye

    form.addEventListener("submit", function (e) {
        errorBox.innerHTML = ""; // purana message clear karo

        const name = form.querySelector("input[name='name']").value.trim();
        const email = form.querySelector("input[name='email']").value.trim();

        if (name === "" || email === "") {
            e.preventDefault(); 
            errorBox.innerHTML = "⚠️ Please fill out both name and email!";
        }
    });
});


 
