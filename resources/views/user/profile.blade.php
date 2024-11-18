<x-layout title="Perfil | {{$user->name ?? 'Usuário'}}" column="true">
    <div class="flex container mt-4">
        <div class="w-[25%] sticky h-[350px] top-2 mb-6 select-none">
            <div class="flex flex-col">
                <div class="flex">
                    <svg class="icon_Icon__ptI3R" width="80" height="80" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-live="polite" aria-hidden="false"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.8 28.8c0 13.255 10.745 24 24 24s24-10.745 24-24-10.745-24-24-24-24 10.745-24 24zm24 4.8a9.6 9.6 0 0 1-9.6-9.6 9.6 9.6 0 0 1 9.6-9.6 9.6 9.6 0 0 1 9.6 9.6 9.6 9.6 0 0 1-9.6 9.6zm15.252 12.147A22.716 22.716 0 0 1 28.8 51.6a22.715 22.715 0 0 1-15.252-5.853C16.213 39.992 22.04 36 28.8 36s12.587 3.992 15.252 9.747z" fill="#C4C7CC"></path></svg>
                    <div class="flex flex-col justify-center">
                        <h2 class="mx-2 font-medium text-lg">
                            {{ $user->user_name ?? "Usuário"}}
                        </h2>
                        <h3 class="mx-2 text-base">
                            {{ $user->email ?? "email"}}
                        </h3>
                    </div>
                </div>
                <div class="border border-[#D7D7D7] rounded w-[80%] block
                mx-auto mt-8 mb-6"></div>
                <div class="flex flex-col">
                    <div class="mx-4 mb-5 flex">
                        <div class="border-4 rounded-sm mr-2 border-[#D7D7D7]"></div>
                        <p>
                            Perfil
                    </div>
                    <div class="mb-5 group">
                        <a href="user/profile/settings" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Configurações da conta
                            </p>
                        </a>
                    </div>
                    <div class="mb-5 group">
                        <a href="user/profile/settings/notifications" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Configurações de notificações
                            </p>
                        </a>
                    </div>
                    <div class="mb-5 group">
                        <a href="user/profile/following" class="mx-4 flex">
                            <div class="border-4 rounded-sm mr-2 border-[#D7D7D7] invisible
                            group-hover:visible animate-pulse"></div>
                            <p>
                                Empresas que você segue
                            </p>
                        </a>
                    </div>
                    <div class="border border-[#D7D7D7] rounded w-[80%] block
                    mx-auto mt-6 mb-8"></div>
                    <a href="/logout" class="mx-auto text-center border border-black
                    w-[80%] rouded p-2 rounded font-medium flex justify-center">
                        Sair
                        <span class="ml-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m12.02 6.981 4.687 4.664a.5.5 0 0 1 0 .708l-4.686 4.687-1.06-1.06 3.228-3.23H2v-1.5h12.184l-3.222-3.206 1.059-1.063Z" fill="#000"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 4.5c-.69 0-1.25.56-1.25 1.25v3.393H6V5.75A2.75 2.75 0 0 1 8.75 3h9.5A2.75 2.75 0 0 1 21 5.75v11.995a2.75 2.75 0 0 1-2.757 2.75l-9.5-.026A2.75 2.75 0 0 1 6 17.72v-2.535h1.5v2.535a1.25 1.25 0 0 0 1.247 1.25l9.5.026a1.25 1.25 0 0 0 1.253-1.25V5.75c0-.69-.56-1.25-1.25-1.25h-9.5Z" fill="#000"></path></svg>  
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-[55%] border rounded-[10px] border-[#D7D7D7]">
            <div class="flex items-center justify-between p-6">
                <p class="mb-3 text-2xl font-semibold">
                    Perfil
                </p>
                <img src="{{asset("imagens/profile-display.png")}}" alt="profile display" 
                width="300" class="rounded">
            </div>
            <div class="border border-[#D7D7D7]"></div>
            <div class="mt-6 pl-6">
                <div class="flex items-center">
                    <h2 class="font-semibold text-lg">
                        Minhas informações
                    </h2>
                    <span class="btn-editar p-0.5 rounded-full cursor-pointer 
                    hover:bg-gray-200" title="Editar informações">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.129 7.715 1.594-1.594 1.473 1.473-1.594 1.594-1.473-1.473Zm-1.06 1.06L6.523 16.32l-.235 1.55 1.756-.124 7.496-7.497-1.473-1.473Zm-9.028 7.32a1.5 1.5 0 0 1 .422-.835l10.2-10.2a1.5 1.5 0 0 1 2.12 0l1.474 1.474a1.5 1.5 0 0 1 0 2.12L9.105 18.807a1.5 1.5 0 0 1-.955.436l-3.001.211a.5.5 0 0 1-.53-.573l.422-2.784Z" fill="#00060C"></path></svg>
                    </span>
                </div>
                <div>
                    <p class="font-semibold my-4">
                        Nome de exibição:
                        <span class="font-normal">
                            {{ $user->user_name ?? "Nome não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Nome completo:
                        <span class="font-normal">
                            {{ $user->name ?? "Nome não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Situação empregatícia:
                        <span class="font-normal">
                            {{ $user->current_situation ?? "Não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Situação empregatícia:
                        <span class="font-normal">
                            {{ $user->current_situation ?? "Não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Cargo:
                        <span class="font-normal">
                            {{ $user->current_position ?? "Não definido" }}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Local:
                        <span class="font-normal">
                            {{ $user->city->name ?? "Não definido" }}
                            , {{ $user->state->name  ?? "Não definido" }}
                            , {{ $user->country ?? "Não definido"}}
                        </span>
                    </p>
                    <p class="font-semibold my-4">
                        Empresa:
                        <span class="font-normal">
                            {{ $user->company ?? "Não definido" }}
                        </span>
                    </p>
                </div>
            </div>
            <div class="border border-[#D7D7D7] my-6"></div>
            <div class="">
                <div class="pl-6">
                    <h2 class="font-semibold text-lg">
                        Currículo
                    </h2>
                    <p class="text-sm p-3">
                        Adicione um currículo para preencher candidaturas a 
                        vagas de forma rápida.
                    </p>
                </div>
                @if ($user->resume == null)
                <div class="flex items-center p-6 justify-center border-2 w-[90%] 
                border-dashed border-[#222] rounded-md mx-auto my-4 mb-8 enviarCurriculo
                hover:bg-slate-100 cursor-pointer">
                    <span class="ResumefileUploader_svgContainer__NPJgc">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-test="resume-section-upload-svg"><g id="Upload"><path id="download-24-solid" fill-rule="currentColor" clip-rule="currentColor" d="M28 21.334c.736 0 1.333.597 1.333 1.333V28c0 .737-.597 1.334-1.333 1.334H4A1.333 1.333 0 0 1 2.667 28v-5.333a1.333 1.333 0 1 1 2.666 0v4h21.334v-4c0-.736.596-1.333 1.333-1.333Zm-12 2.652c.736 0 1.333-.597 1.333-1.333V7.203l5.707 5.707a1.333 1.333 0 1 0 1.886-1.886l-7.967-7.966a1.33 1.33 0 0 0-.96-.39 1.33 1.33 0 0 0-.959.39l-7.966 7.966a1.333 1.333 0 1 0 1.885 1.886l5.707-5.707v15.45c0 .736.598 1.333 1.334 1.333Z" fill="currentColor"></path></g></svg></span>
                        <div class="ml-3">
                        <h3 class="heading_Heading__BqX5J heading_Level3__X81KK" aria-live="polite" aria-hidden="false" data-test="resume-section-filename">
                            Carregar currículo
                        </h3>
                        <small class="small_Small__0Prbr" aria-live="polite" 
                        aria-hidden="false" data-test="resume-section-file-types">
                            Use um arquivo PDF, DOCX, DOC ou TXT.
                        </small>
                    </div>
                </div>
                <form action="/user/update-resume" method="post">
                    @csrf
                    @method("POST")
                    <input accept=".pdf,.rtf,.txt,.doc,.docx" 
                    class="hidden" id="upload-resume" type="file" name="resume"
                    onchange="updateResume()">
                    <button type="submit" class="hidden update-resume"></button>
                </form>
                @else
                    
                @endif
                
            </div>
        </div>
    </div>
</x-layout>
<script>
    document.querySelector(".finalizarConta").remove();
    btnEnviarCurriculo = document.querySelector(".enviarCurriculo");
    btnEnviarCurriculoForm = document.querySelector(".update-resume");
    inputEnviarCurriculo = document.getElementById("upload-resume");
    btnEnviarCurriculo.addEventListener("click", ()=> {
        inputEnviarCurriculo.click();
    });
    function updateResume() {
        btnEnviarCurriculoForm.click();
    }
</script>
@dd($user)