export function loadingWheel(size) {
    let response = /*html*/`
        <div role="status" class="loadingStatus">
            <svg aria-hidden="true" class="text-gray-200 animate-spin fill-tt" 
            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
        <script>
            setTimeout(() => {
                $(".loadingStatus svg").width(${size});
            }, 100);
        </script>
    `
    return response;
}

export function formCriarConta() {
    let response = /*html*/`
        <div class="password-label">
            <label for="password" class="text-sm my-2">
                Crie sua senha
            </label>
            <span class="password-error text-sm mx-1 my-2 text-red-600">
            </span>
        </div>
        <input type="password" name="password" id="password"
        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base pswd">
        <div class="password-confirmation-label">
            <label for="password_confirmation" class="text-sm my-2">
                Repita sua senha
            </label>
            <span class="password_confirmation-error text-sm mx-1 my-2 text-red-600">
            </span>
        </div>
        <input type="password" name="password_confirmation" id="password_confirmation"
        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base pswd">
        <div class="flex items-center p-2 select-none">
            <input type="checkbox" name="mostrarSenha" id="mostrarSenha" 
            class="hover:cursor-pointer mr-2">
            <label for="mostrarSenha" class="hover:cursor-pointer">
                Mostrar senha
            </label>
        </div>
        <button class="btnCriarConta my-3 border-2 border-black rounded py-2 h-[45px] flex 
        justify-center items-center hover:bg-slate-100 active:bg-slate-200">
            Criar sua conta
        </button>
    `;
    return response;
}

export function formLogin() {
    let response = /*html*/`
        <div class="password-label">
            <label for="password" class="text-sm my-2">
                Insira sua senha
            </label>
            <span class="password-error text-sm mx-1 my-2 text-red-600">
            </span>
        </div>
        <input type="password" name="password" id="password"
        class="border-[#D7D7D7] border-2 rounded p-2.5 text-base pswd">
        <div class="flex items-center p-2 select-none">
            <input type="checkbox" name="mostrarSenha" id="mostrarSenha" 
            class="hover:cursor-pointer mr-2">
            <label for="mostrarSenha" class="hover:cursor-pointer">
                Mostrar senha
            </label>
        </div>
        <button class="btnLogin my-3 border-2 border-black rounded py-2 h-[45px] flex 
        justify-center items-center hover:bg-slate-100 active:bg-slate-200">
            Entrar
        </button>
    `;
    return response;
}

export function mensagem(message) {
    let response = /*html*/`
        <div class="fixed bottom-2 tranform bg-tt text-white px-48 py-3 right-2
        rounded select-none mensagem">
            <p class="text-center text-lg font-bold">
                ${message}
            </p>
            <script>
                setTimeout(() => {
                    $(".mensagem").fadeOut()
                    .on("animationEnd", function() {
                        this.remove();
                    });
                }, 5000);
            </script>
        </div>
    `;
    return response;
}