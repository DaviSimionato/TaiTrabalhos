String.prototype.padronizarPesquisa = function() {
    return this.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
};

// $("#cidades").on("input", ()=> {
//     if(todasCidades.length > 0 && $("#cidades").val().trim != "") {
//         let cidades = []; 
//         todasCidades.forEach((cdd)=> {
//             if(cdd.padronizarPesquisa().startsWith(`${$("#cidades").val().padronizarPesquisa()}`)) {
//                 cidades.push(cdd);
//             }
//         });
//         $(".cidade").remove();
//         $.each(cidades, (i, cidade) => {
//             let element = 
//             `<p class="font-medium text-lg my-1 text-center cidade">
//                 ${cidade}
//             </p>`;
//             $(".vagasMaisProcuradas").append(element);
//         });
//     }
// });

jQuery(()=> {
    $.ajax({
        url: `/api/cidades/SP`,
        method: "GET",
        success: (data)=> {
            let cidades = data.cidades;
            $(".vagasMaisProcuradas .loading").hide();
            for(let i = 0;i<10;i++) {
                let cidade = cidades[i];
                let element = /*html*/
                `<p class="font-medium text-lg my-1 text-center cidade">
                    ${cidade}
                </p>`;
                $(".vagasMaisProcuradas").append(element);
            }
        },
    });
});