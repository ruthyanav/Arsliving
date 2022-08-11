const contactForm = document.getElementById('contact-form');

contactForm.addEventListener("submit", function(e){
    e.preventDefault();

    const url = e.target.action;
    const formData = new FormData(contactForm);

    fetch(url,{
        method: "POST",
        body: formData,
        mode: "no-cors",
    }).then(()=> {
        //url thank you
        window.location.href='thank-you.php'
    }).catch((e) => alert('Error occured'));
});