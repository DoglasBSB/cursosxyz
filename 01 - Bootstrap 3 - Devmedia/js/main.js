$(function(){
      //alert("Clique");
   

   //para aparece o fundo da página
   $("#modal01").modal({backdrop:false, keyboard:false});


   //chamdno a modal de dentro do java script
   $("#modal01").modal("show");

   //fechando o modal
   setTimeout(function(){
   		$("#modal01").modal("hide");

   },3000);

   //Tooltip 
   $(".ttp").tooltip({
   	animation:false,
   	delay : {show:1000, hide: 2000},
   	//define um tútulo padrão para o objeto
   	//title : "Título padrão" 
   	//o tooltip só aparece se clicar
   	trigger : 'click'
   });

   //Popover
   $(".ppv").popover({
   	//delay : {show:1000, hide: 2000},
   	title : "Título do popover",
   	trigger : 'hover focus'
   });

   //Buttons
   $(".btnjs").button();
   //Buttons com carregamento
   $("#troca-estado").click(function(){
      var btn = $(this);
      btn.button("loading");

      setTimeout(function(){
         btn.button("reset");
      }, 3000);

    });



});

