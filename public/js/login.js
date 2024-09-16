import * as tt from './components.js'

let email = "";

$("#email").on("keydown", (e)=> {
    if(e.key == "Enter") {
        checkEmail();
    }
});

$(".btnEntrar").on("click", ()=> {
    checkEmail();
});


function checkEmail() {
    $("#email").removeClass("border-red-300 bg-red-50").addClass("border-[#D7D7D7]");
    $(".btnEntrar").html(tt.loadingWheel(30));
    $(".email-error").html("");
    email = $("#email").val();
    $.ajax({
        type: "POST",
        url: "/api/check-email",
        data: {
            "email": email
        },
        success: function (response) {
            let message = response.message;
            if(message === "user found") {
                mostrarFormLoginUsuario();
            }
            if(message === "no user found") {
                mostrarFormCadastroUsuario();
            }
        },
        error: function (e) {
            console.clear();
            let erro = e.responseJSON.errors.email[0];
            $("#email").removeClass("border-[#D7D7D7]").addClass("border-red-300 bg-red-50");
            $(".email-error").html(`- ${erro}`);
            $(".btnEntrar").html("Entrar com e-mail");
        }
      });
}

function mostrarFormCadastroUsuario() {
    $(".login-text")
    .html(`
        <tt class="font-semibold text-lg text-tt">Seja bem vindo(a) ao TaíTrabalhos</tt>
        <br>Criar sua conta com o e-mail<br>
        <p class="font-medium">${email}</p>`);
    $(".login-inputs").html(tt.formCriarConta());

    $("#mostrarSenha").on("click", function () { 
        if(this.checked) {
            $(".login-inputs input").each((i,e)=> {
                if($(e).attr("type") == "password") $(e).attr("type", "text");
            })
        }else {
            $(".login-inputs input").each((i,e)=> {
                if($(e).attr("type") == "text") $(e).attr("type", "password");
            })
        }
    });
    $(".btnCriarConta").on("click", ()=> {
        criarConta();
    });
    $("#password").trigger("focus").on("keydown", (e)=> {
        if(e.key == "Enter") {
            criarConta();
        }
    });
}

function mostrarFormLoginUsuario() {
    $(".login-text")
    .html(`<tt class="font-semibold text-lg text-tt">Seja bem vindo(a) ao TaíTrabalhos</tt>
        <br>Entrar com o e-mail<br>
        <p class="font-medium">${email}</p>`);
    $(".login-inputs").html(tt.formLogin());
    $("#mostrarSenha").on("click", function () { 
        if(this.checked) {
            $(".login-inputs input").each((i,e)=> {
                if($(e).attr("type") == "password") $(e).attr("type", "text");
            })
        }else {
            $(".login-inputs input").each((i,e)=> {
                if($(e).attr("type") == "text") $(e).attr("type", "password");
            })
        }
    });
    $(".btnLogin").on("click", ()=> {
        login();
    });
    $("#password").trigger("focus").on("keydown", (e)=> {
        if(e.key == "Enter") {
            login();
        }
    });
}

function login() { 
    $(".login-inputs .pswd").removeClass("border-red-300 bg-red-50").addClass("border-[#D7D7D7]");
    $(".btnLogin").html(tt.loadingWheel(30));
    $(".password-error").html("");
    $(".btnLogin").prop("disabled", true);
    $.ajax({
        type: "POST",
        url: "/api/login",
        data: {
            "email": email,
            "password": $("#password").val()
        },
        success: function () {
            $(".login").addClass("justify-center").html(tt.loadingWheel(60));
            $("footer").append(tt.mensagem("Usuário logado"));
            setTimeout(()=> {
                window.location.href = "/";
            }, 1500);
        },
        error: function (e) {
            console.clear();
            let erro = e.responseJSON.errors.password[0];
            $(".login-inputs .pswd").removeClass("border-[#D7D7D7]").addClass("border-red-300 bg-red-50");
            $(".password-error").html(`- ${erro}`);
            $(".btnLogin").prop("disabled", false);
        }
      }).always(()=> {
        $(".btnLogin").html("Entrar");
      });
}

function criarConta() {
    $(".login-inputs .pswd").each((i,e)=> {
        $(e).removeClass("border-red-300 bg-red-50").addClass("border-[#D7D7D7]");
    });
    $(".btnCriarConta").html(tt.loadingWheel(30));
    $(".password-error").html("");
    $(".btnCriarConta").prop("disabled", true);
    $.ajax({
        type: "POST",
        url: "/api/create-account",
        data: {
            "email": email,
            "password": $("#password").val(),
            "password_confirmation": $("#password_confirmation").val()
        },
        success: function () {
            $(".login").addClass("justify-center").html(tt.loadingWheel(60));
            $("footer").append(tt.mensagem("Usuário criado"));
            setTimeout(()=> {
                window.location.href = "/";
            }, 1500);
        },
        error: function (e) {
            console.clear();
            let erro = e.responseJSON.errors.password[0];
            $(".login-inputs .pswd").each((i,e)=> {
                $(e).removeClass("border-[#D7D7D7]").addClass("border-red-300 bg-red-50");
            });
            $(".password-error").html(`- ${erro}`);
            $(".btnCriarConta").prop("disabled", false);
        }
      }).always(()=> {
        $(".btnCriarConta").html("Criar conta");
      });
}