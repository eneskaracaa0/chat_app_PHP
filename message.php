<?php
  require_once 'db.php';

  //gönderilen veri yakalanır
 $getMsg = $_POST['text'];

 //sorular tablomuzda kontrol ederiz yazılanın geçtiği soru varsa karşlığı olan cevapları listeler
$checkData = $db->prepare('SELECT answer FROM chat WHERE question LIKE :getMsg');
$checkData->execute([
    ':getMsg' => "%$getMsg%"
]);

//sorgu çalışmışsa FETCH_ASSOC(dizi şeklinde alınır)
//cevaplar replay değişkeninde tutulur fe form ekranında yazdırılır
if ($checkData->rowCount() > 0) {
    $fetch_data = $checkData->fetch(PDO::FETCH_ASSOC);
    $replay = $fetch_data['answer'];
    echo $replay;
} else {
    echo 'Sorry, I am unable to understand you.';
}
?>