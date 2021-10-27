$(document).ready(function(){
    $(".pergunta1").click(function(){

        if (this.firstElementChild.firstElementChild.classList.contains("box-faq-item-fechado")){
            this.firstElementChild.firstElementChild.classList.remove("box-faq-item-fechado")
            this.firstElementChild.firstElementChild.classList.add("box-faq-item-aberto")
            addSombra(this);
        }else{
            this.firstElementChild.firstElementChild.classList.remove("box-faq-item-aberto")
            this.firstElementChild.firstElementChild.classList.add("box-faq-item-fechado")
            removerSombra(this);
        }
        $("."+this.lastElementChild.classList[1]).slideToggle("slow");
    });

    $(".pergunta2").click(function(){
        if (this.firstElementChild.firstElementChild.classList.contains("box-faq-item-fechado")){
            this.firstElementChild.firstElementChild.classList.remove("box-faq-item-fechado")
            this.firstElementChild.firstElementChild.classList.add("box-faq-item-aberto")
            addSombra(this);
        }else{
            this.firstElementChild.firstElementChild.classList.remove("box-faq-item-aberto")
            this.firstElementChild.firstElementChild.classList.add("box-faq-item-fechado")
            removerSombra(this);
        }
        $("."+this.lastElementChild.classList[1]).slideToggle("slow");
    });

    $(".pergunta3").click(function(){
        if (this.firstElementChild.firstElementChild.classList.contains("box-faq-item-fechado")){
            this.firstElementChild.firstElementChild.classList.remove("box-faq-item-fechado")
            this.firstElementChild.firstElementChild.classList.add("box-faq-item-aberto")
            addSombra(this);
        }else{
            this.firstElementChild.firstElementChild.classList.remove("box-faq-item-aberto")
            this.firstElementChild.firstElementChild.classList.add("box-faq-item-fechado")
            removerSombra(this);
        }
        $("."+this.lastElementChild.classList[1]).slideToggle("slow");
    });
});

function addSombra(e){
    e.classList.add("faq-box-aberto");
}

function removerSombra(e){
    e.classList.remove("faq-box-aberto");
}