<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title >Практика на PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body class="body">
    <div class="flex-container">
        <div class="header">
            <div>
                <?php include 'logo.inc.php' ?>
            </div>
                <?php include 'menu.inc.php' ?>
            </div>
        </div>
        <div class="about_me">
            <h1><center><?php  echo $p  ?></center></h1>
            <div class="data">
                <div class="myImage">
                    <?php  echo '<img src="/img/logo.jpeg" style="border-radius: 30px">'; ?>   
                </div>
                <div class="fullname">
                    <p1>Меня зовут: <b><?php echo $name, " ", $surname;?></b><?php echo " из города ", $city ?></p1>
                    <br>
                    <p2>Мне <b><?php echo $age ?></b> год</p2>
                    <br>
                    <p3>На этом сайте мы используем PHP, благодаря которому реализуем динамический вывод данных</p3>
                    <br>
                    <p4>Научились основам и базовым понятиям этого языка для получения данных от сервера, а не от локального компьютера</p4>
                    <br>
                    <p5>Это может пригодиться в дальнейшем для обработки запросов пользователя, а так же для общего пониманию устройства веб-страницы и серверов</p5>
                </div>
            </div>
        </div>
        <div class="knowledge">
            <?php  include 'knowledge.inc.php'; ?>
            <p6><?php   echo $a, ' ', $b, ' ', $c; ?></p6>
            <br>
            <script>
                var screenWidth = window.screen.width,
                screenHeight = window.screen.height,
                logicalProcess = navigator.hardwareConcurrency;

                let webgl = document.createElement( 'canvas' ).getContext( 'webgl' ),
                ext = webgl.getExtension( 'WEBGL_debug_renderer_info' );

                console.warn("logicalProcess=" + logicalProcess)
                console.warn("width=" + screenWidth + "&height=" + screenHeight);
                console.warn( webgl.getParameter( ext.UNMASKED_RENDERER_WEBGL ) + " - Видеокарта" );

                query1 = 'width=' + screen.width + '&height=' + screen.height;
                query2 = 'logicalProcess=' + logicalProcess;
                query3 = 'videocard=' + (webgl.getParameter( ext.UNMASKED_RENDERER_WEBGL ))

            </script>

            <script defer language="JavaScript"><!--
            document.write('<img src="script.php?' + query1 + "&" +query2 + "&" + query3 +
            ' " '+'border="0" width="1" height="1" />');
            //-->
            </script>
            <br>
            <P7>Ваша конфигурация, используемая в браузере уже на сервере, перезагрузите страницу и увидете её: <?php $text = file_get_contents("configuration.txt"); echo $text; ?></p7>
            <br><br><br>
            <p8>Ну а раз по заданию нужно продемонстрировать операции, которые имеются в модуле, то вот:</p8>
            <br>
            <p9><?php echo "x = ", $x;?></p9>
            <br>
            <p9><?php echo "y = ", $y;?></p9>
            <br>
            <p10><?php echo "Их сумма = ", $sumResult;?></p10>
            <br>
            <p11><?php echo "Их разность = ", $subtractionResult;?></p11>
            <br>
            <p12><?php echo "Частное = ", $divisionResult;?></p12>
            <br>
            <p13><?php echo "Произведение = ", $multiplicationResult;?></p13>
            <br>
            <p14><?php echo "Модуль = ", $moduloResult;?></p14>
            <br>
            <br>
            <p15><?php echo "Сравниваемое значение = ", $comparisonValue;?></p15>
            <br>
            <p16><?php echo  $comparisonResult;?></p16>
        </div>    
        <div class="article">
            <p17><?php print("Будьте анонимны")?></p17>
        </div>  
    </div>
</body>
<footer>
    <?php include "footer.inc.php" ?>
</footer>
</html>
