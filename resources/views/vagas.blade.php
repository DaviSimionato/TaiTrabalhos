<x-layout title="Vagas" column="true">
    <div class="pesquisa py-4">
        <div class="flex justify-center">
            <input type="text" class="border-[#D7D7D7] border-2 rounded-l p-1 pl-2 text-base w-[40%]
            placeholder:pl-2 outline-none focus:border-tt border-r-0"
            placeholder="Encontre sua vaga" id="inputPesquisa">
            <div class="flex items-center justify-center bg-tt text-white rounded-r 
            hover:bg-blue-400 cursor-pointer active:bg-tt btnPesquisar">
                <span class="material-symbols-outlined text-white p-2">
                    search
                </span>
            </div>
        </div>
    </div>
    <div class="container vagas pb-5">
        <div class="flex border-[#D7D7D7] justify-center bg-white">
            <div class="border-[#D7D7D7] border-2 border-r-0 rounded-l max-h-[70vh] overflow-y-scroll">
                @for ($i = 1; $i < 400; $i++)
                <div class="border-[#D7D7D7] border-b-2 min-w-[300px] min-h-[80px] cursor-pointer 
                hover:bg-gray-50">
                    <p class="p-2">
                        Titulo: {{$i}}
                    </p>
                    <p class="pl-4">
                        sla
                    </p>
                </div>
                @endfor
            </div>
            <div class="border-[#D7D7D7] border-2 min-w-[60%] min-h-[70vh] rounded-r max-h-[70vh] overflow-y-scroll">
                <div class="w-full p-6 vaga">
                    <p class="titulo font-semibold text-lg">
                        Titulo da vaga placeholder
                    </p>
                    <p>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
<script>
    $("footer").remove();
    $("#inputPesquisa").on("keypress", function(e) {
        if(e.key == "Enter") {
            window.location.href = `/vagas/${this.value.replace(/\s/g, '-')}`;
        }
    });
    $(".btnPesquisar").on("click", ()=> {
        if($("#inputPesquisa").val().trim() != "") {
            window.location.href = `/vagas/${$("#inputPesquisa").val().replace(/\s/g, '-')}`;
        }
    });
</script>