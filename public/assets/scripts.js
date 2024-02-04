const like = document.querySelectorAll(".comments .like");
const hate = document.querySelectorAll(".comments .hate");
const replyIcon = document.querySelectorAll(".comments .replyIcon");
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

replyIcon.forEach(element => {
    element.addEventListener("click", ()=>{
        element.classList.toggle("aze")


    })
});
