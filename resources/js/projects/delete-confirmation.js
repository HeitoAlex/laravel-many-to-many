
const formEls = document.querySelectorAll('form.form-destroyer');

formEls.forEach((formEL) => {

    formEL.addEventListener("submit", function(event){
        event.preventDefault();

        const userChoiche = window.confirm("You really want to delete " + this.getAttribute("data-project-title") + " ?");

        if(userChoiche){
            this.submit();
        }
    })
})
