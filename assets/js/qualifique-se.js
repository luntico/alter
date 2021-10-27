$(document).ready(function(){
   let img =  document.querySelector(".imagem-celular-qualifique-se");

    if(img != null){
        let imagem = img.getAttribute("srcset");
        localStorage.setItem("srcset", imagem);
    }
});

$(".imagem-celular-qualifique-se").mouseenter(function(){
    this.removeAttribute("srcset");
    });
$(".imagem-celular-qualifique-se").mouseleave(function(){
    this.setAttribute("srcset",localStorage.getItem("srcset"));
    });
