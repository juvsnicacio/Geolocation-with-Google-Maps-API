<?php

$nomeCadastro = $_POST["nome"];
echo $nomeCadastro;
?>

<script>
minAjax({
    url:"testeAjax.php",//request URL
    type:"POST",//Request type GET/POST
    //Send Data in form of GET/POST
    data:{
      name:"batman",
      profession:"detective",
      worth:"Rich",
      company:"Wayne Enterprises"
    },
    //CALLBACK FUNCTION with RESPONSE as argument
    success: function(data){
      alert(data);
    }

  });

  </script>