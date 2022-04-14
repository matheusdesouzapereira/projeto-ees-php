/* Função para o botão do menu */
var botaoMenu = document.querySelector('.botaoMenu');
var conteudoMenu = document.querySelector('.conteudoMenu');
var menu = document.querySelector('.menu');
var botaoMenu2 = document.querySelector('.botaoMenu2');
var conteudo = document.querySelector('.conteudo');

botaoMenu.addEventListener('click', ()=>{
    conteudoMenu.style.display = "none";
    menu.style.width = "60px";
    botaoMenu2.style.display = "block";
    botaoMenu2.style.margin = "0 auto";
    botaoMenu2.style.marginRight = "10px";
    botaoMenu.style.display = "none";
    conteudo.style.width = "calc(100% - 80px)";
});

botaoMenu2.addEventListener('click', ()=>{
    menu.style.width = "300px";
    conteudoMenu.style.display = "block";
    botaoMenu2.style.display = "none";
    botaoMenu.style.display = "block";
    conteudo.style.width = "calc(100% - 320px)";
});

/* Máscara do telefone */

function mask(o, f) {
    setTimeout(function() {
       var v = mphone(o.value);
       if (v != o.value) {
          o.value = v;
       }
    }, 1);
 }

 function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
       r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
       } else if (r.length > 5) {
       r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
       } else if (r.length > 2) {
       r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
    r = r.replace(/^(\d*)/, "($1");
    }
    return r;
 }


 /* Botão adicionar item 2.0 na proposta */
 $(document).ready(function() {
   var maximo = 30;   //maximo de 5 campos
   var i = 1;
   $('#add_divitem2').click (function(e) {
     e.preventDefault();  //previne novos cliques
     if (i < maximo) {
       $('#adicionaItem2').append(`

      <div>
         <p><input type="text" class="input_form input-item" name="tituloItem2[]" placeholder="Título do Item"/> </p>
         <textarea class="input_form_textarea" name="descricaoItem2[]" rows="10" placeholder="Descrição do item"></textarea>
         <p class="remove"><a href="#">REMOVER</a></p>
      </div>    
       
       `);
           i++;
     }
  });
 
    // Remove o div anterior
    $('#adicionaItem2').on("click",".remove",function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
      i--;
    });
});

/* Adiciona modificado */
/* Botão adicionar item 2.0 na proposta */
$(document).ready(function() {
  var maximo = 30;   //maximo de 5 campos
  var i = 1;
  $('#add_divitem2_modificado').click (function(e) {
    e.preventDefault();  //previne novos cliques
    if (i < maximo) {
      $('#adicionaItem2').append(`

     <div>
        <p><input type="text" class="input_form input-item" name="tituloItem2_modificado[]" placeholder="Título do Item"/> </p>
        <textarea class="input_form_textarea" name="descricaoItem2_modificado[]" rows="10" placeholder="Descrição do item"></textarea>
        <p class="remove"><a href="#">REMOVER</a></p>
     </div>    
      
      `);
          i++;
    }
 });

   // Remove o div anterior
   $('#modificado2').on("click",".remove",function(e) {
     e.preventDefault();
     $(this).parent('div').remove();
     i--;
   });
});
/* Final adiciona modificado */

 /* Botão adicionar item 3.0 na proposta */
 $(document).ready(function() {
   var maximo = 30;   //maximo de 5 campos
   var i = 1;
   $('#add_divitem3').click (function(e) {
     e.preventDefault();  //previne novos cliques
     if (i < maximo) {
       $('#adicionaItem3').append(`

      <div>
         <p><input type="text" class="input_form input-item" name="tituloItem2[]" placeholder="Título do Item"/> </p>
         <textarea class="input_form_textarea" name="descricaoItem3[]" rows="10" placeholder="Descrição do item"></textarea>
         <p class="remove"><a href="#">REMOVER</a></p>
      </div>    
       
       `);
           i++;
     }
  });
 
    // Remove o div anterior
    $('#adicionaItem3').on("click",".remove",function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
      i--;
    });
});

/* Adiciona modificado */
/* Botão adicionar item 3.0 na proposta */
$(document).ready(function() {
  var maximo = 30;   //maximo de 5 campos
  var i = 1;
  $('#add_divitem3_modificado').click (function(e) {
    e.preventDefault();  //previne novos cliques
    if (i < maximo) {
      $('#adicionaItem3').append(`

     <div class="modificado">
        <p><input type="text" class="input_form input-item" name="tituloItem3_modificado[]" placeholder="Título do Item"/> </p>
        <textarea class="input_form_textarea" name="descricaoItem3_modificado[]" rows="10" placeholder="Descrição do item"></textarea>
        <p class="remove"><a href="#">REMOVER</a></p>
     </div>    
      
      `);
          i++;
    }
 });

   // Remove o div anterior
   $('#modificado3').on("click",".remove",function(e) {
     e.preventDefault();
     $(this).parent('div').remove();
     i--;
   });
});
/* Final adiciona modificado */

/* Máscara de moeda */

function mascaraMoeda(event) {
   const onlyDigits = event.target.value
     .split("")
     .filter(s => /\d/.test(s))
     .join("")
     .padStart(3, "0")
   const digitsFloat = onlyDigits.slice(0, -2) + "." + onlyDigits.slice(-2)
   event.target.value = maskCurrency(digitsFloat)
 }
 
 function maskCurrency(valor, locale = 'pt-BR', currency = 'BRL') {
   return new Intl.NumberFormat(locale, {
     style: 'currency',
     currency
   }).format(valor)
 }

 /* Verificar se as 2 senhas são iguais */

 function validarSenha(){
  /* puxando campos senha e confirmarSenha do formuláro */
  var senha = form.senha.value;
  var confirmarSenha = form.confirmarSenha.value;

  /* verifica se o campo de senha esta vazio ou tem menos de 8 caracteres */
  if(senha == "" || senha.length <= 7){
    alert("Sua senha deve ter no mínimo 8 caracteres");
    form.senha.focus();
    return false;
  }

  /* verifica se o campo de confirmar senha esta vazio ou tem menos de 8 caracteres */
  if(confirmarSenha == "" || confirmarSenha.length <= 7){
    alert("Campo Confirmar senha deve ter no mínimo 8 caracteres");
    form.confirmarSenha.focus();
    return false; 
  }
  
  /* Verifica se as senhas conferem */         
  if(senha != confirmarSenha){
    alert("Senhas são diferentes");
    form.senha.focus();
    return false;
  }
}

function confirmaExclusao(){
  let confirmacao = confirm("Tem certeza?");

  if(confirmacao == true){
    return true;
  }else{
    return false;
  }
}
