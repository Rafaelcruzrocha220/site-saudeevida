$(document).ready(function(){
    console.log('readd')
    $(".readMore").click(function(){
        if($(this).text() == "Ler"){
            $(this).text("Fechar") 
        }
        else{
            $(this).text("Ler") 
        }

        $(this).next().toggle(function(){

        })
    });
})