<?php
if(!($conexao=pg_connect ("host= localhost dbname= dbTeste port= 5432 user= postgres password= linhofilho"))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
   pg_set_client_encoding ($conexao, "utf8");
   // print "Conexão OK!"; 
}

?>
