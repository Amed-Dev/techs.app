import { $ } from "./utils/dom.js";

$("#btn__iniciar-sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPage);

const message = $("#message");
const colors = ["#87CEEB", "#98FB98", "#ababab", "#e7e7bb"];

var formulario_register = $(".formulario__register");
var contenedor_login_register = $(".contenedor__login-register");
var caja_trasera_login = $(".caja__trasera-login");

const getBackgroundColor = () => {
  let i = Math.floor(Math.random() * colors.length);
  return colors[i];
};

function anchoPage() {
  if (window.innerWidth > 850) {
    caja_trasera_login.style.display = "block";
    contenedor_login_register.style.left = "410px";
  } else {
    caja_trasera_login.style.display = "block";
    caja_trasera_login.style.opacity = "1";
    contenedor_login_register.style.left = "0px";
    formulario_register.style.display = "block";
  }
}

anchoPage();

function iniciarSesion() {
  window.location.href = "/login";
}

//Solicitudes fetch

const registerForm = $("#register");

registerForm.addEventListener("submit", (e) => {
  e.preventDefault();
  registerNewUser();
});

async function registerNewUser() {
  let formData = new FormData($("#register"));
  formData.append("avatar", getBackgroundColor());
  formData.append("method", "registerNewUser");

  fetch("/api.php", {
    method: "POST",
    body: formData,
    headers: {
      Accept: "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === "success") {
        message.classList.add("success");
        message.textContent = data.message;
        setTimeout(() => {
          window.location.href = "/login";
        }, 3000);
      }
    })
    .catch((error) => console.error("Error:", error));
}
