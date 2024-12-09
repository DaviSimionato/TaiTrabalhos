<x-layout title="Login - Empresa" column="true">
    <div class="flex justify-between items-center container">
        <img 
        src="{{asset("imagens/_bfa0f7d1-57af-4382-a6da-9d5b22a3c2ff.jfif")}}" 
        alt="img/tt1"
        class="select-none pointer-events-none max-w-[450px] opacity-0">
        <div class="login mx-4 rounded-md bg-[#F9F9F9] w-full flex flex-col items-center 
        min-h-[350px] mt-10">
            <h1 class="my-5 pt-3 font-semibold text-xl">
                Login para empresas
            </h1>
            <p class="text-center max-w-[375px] font-semibold login-text mb-4 min-h-[100px]">
                Acesse a conta de sua empresa ou crie uma. Ao continuar,
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
            <form action="/company/login" method="post" class="w-full flex justify-center">
                @csrf
                @method("POST")
                <div class="max-w-[375px] w-full flex flex-col login-inputs">
                    <div class="email-label my-1.5">
                        <label for="email" class="text-sm my-2">
                            Insira seu e-mail
                        </label>
                        <span class="email-error text-sm mx-1 my-2 text-red-600">
                        </span>
                    </div>
                    <input type="email" name="email" id="email"
                    class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">

                    @error("email")
                    <span class="email-error text-sm mx-1 my-2 text-red-600">
                        {{$message}}
                    </span>
                    @enderror

                    <div class="email-label my-1.5">
                        <label for="email" class="text-sm my-2">
                            Insira sua senha
                        </label>
                    </div>
                    <input type="password" name="password" id="password"
                    class="border-[#D7D7D7] border-2 rounded p-2.5 text-base">
                    @error("password")
                    <span class="email-error text-sm mx-1 my-2 text-red-600">
                        {{$message}}
                    </span>
                    @enderror
                    <button type="submit" class="btnEntrar my-5 mb-2 border-2 border-black rounded py-2 h-[45px] flex 
                    justify-center items-center hover:bg-slate-100 active:bg-slate-200">
                        Entrar
                    </button>
                    <div class="flex text-sm">
                        <p>
                            Não tem uma conta? - 
                        </p>
                        <a href="/para-empresas/registrar" class="text-tt underline ml-1 pb-6">
                            Criar uma conta
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <img 
        src="{{asset("imagens/_357184ce-3e77-4721-8c73-b37f7213ef5a.jfif")}}" 
        alt="img/tt2"
        class="select-none pointer-events-none max-w-[420px] opacity-0">
    </div>
</x-layout>
