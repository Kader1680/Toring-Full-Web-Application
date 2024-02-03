const like = document.querySelectorAll(".comments .like");
const hate = document.querySelectorAll(".comments .hate");
like.forEach(element => {
    element.addEventListener("click", ()=>{
        element.classList.toggle("event")
    })
});

hate.forEach(element => {
    element.addEventListener("click", ()=>{
        element.classList.toggle("event")


    })
});
