$('.apagar').click(function (e) {
  e.preventDefault();
  let id = this.getAttribute("data-id");
  let cod_verificador = document.querySelector("#cod_verificador").value;
  let linha = this.parentElement.parentElement;
  console.debug(this);
  Swal.fire({
    title: 'Você tem certeza?',
    text: "Após apagar não será possível reverter.",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sim, apagar!',
    cancelButtonText: 'Não, cancele!',
  }).then((result) => {
    console.debug(result);

    //if (result.isConfirmed) {
    if (result.value) {
      let formData = new FormData();
      formData.append("comentario", "comentario");
      formData.append("apagar", id);
      formData.append("cod_verificador", cod_verificador);

      const URL_TO_FETCH = base + '/email.php';
      fetch(URL_TO_FETCH, {
        method: 'POST', // opcional
        body: formData
      })
          .then(function (response) {
            response.json()
                .then(function (result) {
                  if(result[0] === true){
                    notificacao('Apagado!',
                        'O feedback escolhido foi apagado e não será mais mostrado.',
                        'success');
                    linha.remove();
                  }else{
                    notificacao('Comentário não apagado!',
                        'Houve um erro na solicitação, por favor, tente em outro momento.',
                        'error');
                  }
                })
          })
          .catch(function (err) { console.error(err); });
    }
  })
});

function notificacao(titulo, resumo, tipo){
  /**
   * tipo error ou success
   */
  Swal.fire(
      titulo,
      resumo,
      tipo
  )
}

function notificacaoTesteEmail(){
  /**
   * tipo error ou success
   */
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

  Toast.fire({
    type: 'info',
    title: 'Estamos testando o email e a senha. Por favor aguarde um pouco mais.'
  })
}

document.getElementById("updateHome").addEventListener("submit",function (e) {
  e.preventDefault();
  const url = base+"/admin/processing/ajax.php";
  const urlTeste = base+"/admin/processing/testar-email.php";
  const body = new FormData(this);

  if(this[0].value === "phpmailer"){
    notificacaoTesteEmail();
    fetch(urlTeste, {
      method: "POST",
      body: body,
      headers: new Headers()
    })
        .then((res) => res.json())
        .then((response) => {
          if(response[0] === true){
            inserirDados();
          }else{
            notificacao('Houve um erro!',
                'Verifique o endereço inserido, a senha ou se foi dado permissão no google para envio de app menos seguro (usando apenas a senha como método), verifique <a href="https://myaccount.google.com/security" target="_blank" rel="noopener noreferrer">aqui</a>.',
                'error');
          }
        })
  }else {
    inserirDados();
  }

  function inserirDados() {
    fetch(url, {
      method: 'POST',
      body: body,
      headers: new Headers()
    })
        .then((res) => res.json())
        .then((response) => {
          if(response[0] === true){
            notificacao('Sucesso!',
                'Os dados foram atualizados com sucesso!',
                'success');
          }else{
            notificacao('Houve um erro!',
                'Houve um erro na solicitação, por favor tente em outro momento ou entre em contato com o desenvolvedor',
                'error');
          }
        })
  }

},true);

document.querySelector(".selecionarMetodo").addEventListener("change", function (e) {
  e.preventDefault();
  let cadastroEmailSenhaGmail = document.getElementById("cadastroEmailSenhaGmail");
  let itemSelecionado = this.options[this.selectedIndex].text;
  if(itemSelecionado === "PhpMailer (biblioteca)"){
    if(cadastroEmailSenhaGmail.style.display === "none")
      cadastroEmailSenhaGmail.style.display = "flex";
  }else{
    cadastroEmailSenhaGmail.style.display = "none";
  }
},true);

document.querySelector(".input-group-text").addEventListener("click",function () {
  let olho = this.firstChild;
  if(olho.classList.contains("fa-eye")){
    olho.classList.remove("fa-eye");
    olho.classList.add("fa-eye-slash");
  }else if(olho.classList.contains("fa-eye-slash")){
    olho.classList.remove("fa-eye-slash");
    olho.classList.add("fa-eye");
  }

  let inputSenha = document.querySelector("#senhaGmail");
  if(inputSenha.type === "text"){
    inputSenha.type = "password";
  }else{
    inputSenha.type = "text";
  }

}, true);
