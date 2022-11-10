<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пробный проект по PHP(8 Модуль)</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/mysite/img/1.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 7;                                    
                        $b = 8;
                        $c = $a * $b;
                        echo 'Операция умножения ', $a, ' и ', $b, ' равна = ', $c;
                     ?>
                        <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">

                    <strong>Заметался пожар голубой... <br>
<br>
Заметался пожар голубой, <br>
Позабылись родимые дали. <br>
В первый раз я запел про любовь, <br>
В первый раз отрекаюсь скандалить. <br>
<br>
Был я весь — как запущенный сад, <br>
Был на женщин и зелие падкий. <br>
Разонравилось пить и плясать <br>
И терять свою жизнь без оглядки. <br>
<br>
Мне бы только смотреть на тебя, <br>
Видеть глаз злато-карий омут, <br>
И чтоб, прошлое не любя, <br>
Ты уйти не смогла к другому. <br>
<br>
Поступь нежная, легкий стан, <br>
Если б знала ты сердцем упорным, <br>
Как умеет любить хулиган, <br>
Как умеет он быть покорным. <br>
<br>
Я б навеки забыл кабаки <br>
И стихи бы писать забросил, <br>
Только б тонко касаться руки <br>
И волос твоих цветом в осень. <br>
<br>
Я б навеки пошел за тобой <br>
Хоть в свои, хоть в чужие дали… <br>
В первый раз я запел про любовь, <br>
В первый раз отрекаюсь скандалить. <br>
<br> 
1923г.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>