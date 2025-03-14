document.addEventListener("DOMContentLoaded", (e)=>{
    e.preventDefault()

    const btns = Array.from(document.querySelectorAll("button"))
    const links = [
        "https://www.allocine.fr/film/fichefilm_gen_cfilm=727.html",
        "https://www.allocine.fr/film/fichefilm_gen_cfilm=296.html",
        "https://www.allocine.fr/film/fichefilm_gen_cfilm=27782.html"
    ]
    
    btns.forEach((btn)=>{
        btn.addEventListener("click", ()=>{
            if(btns.indexOf(btn) < links.length) {
                window.open(links[btns.indexOf(btn)])
            } else {
                console.log("Un problème est survenu")
            }
        })
    })
})


const collection = [
    {
        image:"./image/king-kong.jpg",
        title:"King Kong",
        data:"1933",
        director:"Merian C.Cooper, Ernest B",
        genre:"Horreur, fantastique",
        sortie: "dvd 22 novembre 2005",
    } 
]