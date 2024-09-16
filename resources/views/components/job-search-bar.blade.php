<div class="flex justify-between items-center container">
    <img 
    src="{{asset("imagens/_bfa0f7d1-57af-4382-a6da-9d5b22a3c2ff.jfif")}}" 
    alt="img/tt1"
    class="select-none pointer-events-none max-w-[450px]">
    <div class="job-search mx-4 rounded-md bg-[#F9F9F9] w-full flex flex-col items-center p-6">
        <p class="text-center max-w-[375px] text-tt font-semibold text-xl">
            Encontre sua vaga
        </p>
        <p class="mb-2 py-3 max-w-[375px] text-center">
            Busque pelo nome da vaga ou sua área de atuação
        </p>
        <div class="max-w-[375px] w-full flex flex-col login-inputs">
            <input type="text" name="buscarVaga" id=""
            class="pesqVaga border-blue-300 border-2 rounded p-2.5 text-base focus:border-tt">
            <button class="btnBuscarVagas my-5 border-2 border-black rounded py-2 h-[45px] flex 
            justify-center items-center hover:bg-blue-50 active:bg-blue-100">
                Buscar vagas
            </button>
        </div>
    </div>
    <img 
    src="{{asset("imagens/_357184ce-3e77-4721-8c73-b37f7213ef5a.jfif")}}" 
    alt="img/tt2"
    class="select-none pointer-events-none max-w-[420px]">
    <script>
        $(".btnBuscarVagas").on("click", ()=> {
            if($(".pesqVaga").val().trim() != "") {
                window.location.href = `/vagas/${$(".pesqVaga").val().replace(/\s/g, '-')}`;
            }
        });
        $(".pesqVaga").on("keydown", (e)=> {
            if(e.key == "Enter" && $(".pesqVaga").val().trim() != "") {
                window.location.href = `/vagas/${$(".pesqVaga").val().replace(/\s/g, '-')}`;
            }
        });
    </script>
</div>