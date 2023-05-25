<?php
require_once 'db.php';
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title">Online Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello, Nasıl yardımcı olabilirim.</p>
                </div>
            </div>


        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Nasıl Yardımcı Olabilirim ?" required>
                <button id="send">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#send').on('click', function() {
                $value = $('#data').val(); //inputun valuesi alınır
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>'; 
                $('.form').append($msg);//formun içerisine kullanıcının girdiği mesaj yazılır
                $('#data').val('');//input temizlenir
                //ajax
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        //başarılıysa hatbot cevapları form içine append olur
                        $replay='<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $('.form').append($replay);


                        //Kaydırma çubuğunu en alta kaydırır
                        $('.form').scrollTop($('.form')[0].scrollHeight);

                    }

                });

            });

        });
    </script>
    <script src="" async defer></script>
</body>

</html>