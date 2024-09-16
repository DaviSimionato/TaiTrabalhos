const pesquisa = $(".search input");

$(".search span").on("click", ()=> {
    if(pesquisa.hasClass("active")) {
        if(pesquisa.val().trim() != "") {
            window.location.href = `/vagas/${pesquisa.val().replace(/\s/g, '-')}`;
        }else {
            pesquisa.removeClass("active");
        }
    }else {
        pesquisa.toggleClass("active").fadeToggle(200).trigger("focus");
    }
});

$(".acc").on("click", ()=> {
    if($(".acc-opt").hasClass("hidden")) {
        $(".acc-opt").removeClass("hidden").addClass("block");
        $(".acc span").addClass("bg-blue-200").removeClass("hover:bg-gray-200");
    }else {
        $(".acc-opt").removeClass("block").addClass("hidden");
        $(".acc span").removeClass("bg-blue-200").addClass("hover:bg-gray-200");
    }
});

pesquisa.on("focusout", ()=> {
    if(pesquisa.hasClass("active")) {
        pesquisa.removeClass("active").fadeToggle(200)
    }
});

pesquisa.on("keypress", (e)=> {
    if(pesquisa.hasClass("active") && e.key == "Enter" && pesquisa.val().trim() != "") {
        window.location.href = `/vagas/${pesquisa.val().replace(/\s/g, '-')}`;
    }
});