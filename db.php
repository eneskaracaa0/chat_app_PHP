<?php

  try
    {
	//PDO Nesnesi. Parametreler: dsn,username,passwd
        $db = new PDO('mysql:host=localhost;dbname=chatbot','root',''); 
       // echo 'bağlantı başarılı';
    }
    catch (PDOException $e)
    {
        //bağlantı başarısız olursa hatayı yakalayıp bilgi alıyoruz.
      echo $e -> getMessage();
    }

?>