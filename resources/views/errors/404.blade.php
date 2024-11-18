<x-layout title="Página não encontrada - 404" column="true">
    <div class="container  flex items-center justify-center">
        <div class="text-center opacity-85">
            <h2 class="font-bold text-4xl py-4">
                Erro 404
            </h2>
            <p class="font-bold text-3xl">
                Página não encontrada
            </p>
        </div>
    </div>
    <script>
        $("header .user").remove();
        let a = document.querySelectorAll("header a");
        a[a.length-1].remove();
    </script>
</x-layout>
