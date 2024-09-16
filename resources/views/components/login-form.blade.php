<div class="flex justify-between items-center container">
    <img 
    src="{{asset("imagens/_bfa0f7d1-57af-4382-a6da-9d5b22a3c2ff.jfif")}}" 
    alt="img/tt1"
    class="select-none pointer-events-none max-w-[450px]">
    <div class="login mx-4 rounded-md bg-[#F9F9F9] w-full flex flex-col items-center 
    min-h-[350px]">
        <p class="text-center max-w-[375px] font-semibold pt-10 mb-4 login-text min-h-[140px]">
            Entre na sua conta ou crie uma conta. Ao continuar,
            você indica que concorda com os 
            <a class="text-tt underline" href="https://google.com" target="_blank">
                Termos de Uso
            </a> 
            e a 
            <a class="text-tt underline" href="https://google.com" target="_blank">
                Política de Privacidade 
            </a> 
            do 
            <sla class="text-tt">Taí Trabalhos</sla>
        </p>
        <div class="max-w-[375px] w-full flex flex-col login-inputs">
            <div class="email-label">
                <label for="email" class="text-sm my-2">
                    Insira seu e-mail
                </label>
                <span class="email-error text-sm mx-1 my-2 text-red-600">
                </span>
            </div>
            <input type="email" name="email" id="email"
            class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
            <button class="btnEntrar my-5 border-2 border-black rounded py-2 h-[45px] flex 
            justify-center items-center hover:bg-slate-100 active:bg-slate-200">
                Entrar com e-mail
            </button>
        </div>
        <div class="max-w-[375px] w-full flex flex-col">
            
        </div>
    </div>
    <img 
    src="{{asset("imagens/_357184ce-3e77-4721-8c73-b37f7213ef5a.jfif")}}" 
    alt="img/tt2"
    class="select-none pointer-events-none max-w-[420px]">
    <script type="module" src="{{asset("js/login.js")}}"></script>
</div>