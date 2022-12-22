<?php
    /*function checkNome(&$nome, &$erNome){
        $nome=trim($nome); //tolgo eventuali spazi da prima e dopo la stringa
    
        //controllo se il nome è vuoto
        if($nome==""){ 
            $erNome = "Campo nome obbligatorio"; //avvaloro la variabile di erroreNome con l'errore corretto
        }
        //controllo se il nome inserito è corretto sintatticamente
        if(!preg_match("/^[a-zA-Z-']*$/",$nome)){
            $erNome = "Il nome non rispetta la sintassi richiesta"; //avvaloro la variabile di erroreNome con l'errore corretto
        }	
    }

    function checkUsername(&$username, &$nome, &$cognome, &$erUsername) {
        //tolgo gli spazi prima e dopo le stringhe
        $username=trim($username);
        $nome=trim($nome);
        $cognome=trim($cognome);
    
        //concateno nome e cognome per andare a svolgere controlli sulla validazione dell'username
        $nomeCognome=$nome.$cognome;
        //concateno cognome e nome per andare a svolgere controlli sulla validazione dell'username
        $cognomeNome=$cognome.$nome;
        
        if($username==""){
            $erUsername = "campo username obbligatorio";
            return 0;	//in modo da uscire dalla funzione e non farla entrare nel secondo if che ha una condizioe simile
        }
        
        //controllo delle casistiche per le quali l'username non possa essere accettato
        if(strcasecmp($username,$nome)==0 || strcasecmp($username,$cognome)==0 || strcasecmp($username,$nomeCognome)==0 || strcasecmp($username,$cognomeNome)==0){
            $erUsername = "il campo username non può contenere nome o cognome";
        }
    }

    function checkPassword(&$psw, &$erPassword){
	
        if($psw==""){
            $erPassword = "campo password obbligatorio";
            return 0;	//in modo da uscire dalla funzione e non farla entrare nel secondo if che ha una condizioe simile
        }
        if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/",$psw)){
            $erPassword = "la password inserita non soddisfa la sintassi richiesta";
        }
    }*/

    function checkUsername(&$username, &$usernameEr, &$u) {
        $username = trim($u);
        $username = stripslashes($username);
        $username = htmlspecialchars($username);
        if(!preg_match("/^[a-zA-Z0-9-_.]{2,15}+$/" , $username)) {
          $usernameEr = "Inserire un username valido.";
        } else {
          $usernameEr = "";
          return 1;
        }
    }

    function checkPassword(&$password, &$passwordEr, &$p) {
        $password = trim($p);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        if (!preg_match("/^[a-zA-Z0-9._-]{8,15}$/", $password)) {
          $passwordEr = "Inserire una password valida.";
        } else {
          $passwordEr = "";
          return 1;
        }
    }
?>