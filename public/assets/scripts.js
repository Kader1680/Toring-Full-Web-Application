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


const closeIcon = document.querySelector(".fa-close");
const added = document.querySelector(".added");
closeIcon.addEventListener("click", ()=>{
    added.setAttribute("style", "visibility : hidden;")
})


var result = document.getElementById("result")

for (var nbr = 0; nbr < 30; nbr++) {
    result.innerHTML += `10 * ${nbr} = ${nbr * 10} `

}
