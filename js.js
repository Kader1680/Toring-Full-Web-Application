let like = document.querySelectorAll(".like");

like.forEach(element => {
    element.addEventListener("click", ()=>{
        this.classList.toggle("event")
        // alert("dfdfd")
    })
});

