@if (session()->has("mesagem"))
    <div class="fixed bottom-2 tranform bg-tt text-white px-48 py-3 right-2
     rounded select-none mensagem">
        <p class="text-center text-lg font-bold">
            {{session("mensagem")}} 
        </p>
    </div>
    <script>
        setTimeout(() => {
            $(".mensagem").fadeOut()
            .on("animationEnd", function() {
                this.remove();
            });
        }, 4000);
    </script>
@endif