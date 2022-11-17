const dataPC = new Promise(function(resolve, reject) {
    setTimeout(() => {
        console.log("Preparing data")
        var screenWidth = window.screen.width,
        screenHeight = window.screen.height,
        logicalProcess = navigator.hardwareConcurrency;
        let webgl = document.createElement( 'canvas' ).getContext( 'webgl' ),
        ext = webgl.getExtension( 'WEBGL_debug_renderer_info' );

        query1 = 'width=' + screen.width + '&height=' + screen.height;
        query2 = 'logicalProcess=' + logicalProcess;
        query3 = 'videocard=' + (webgl.getParameter( ext.UNMASKED_RENDERER_WEBGL ));

        console.warn("logicalProcess=" + logicalProcess);
        console.warn("width=" + screenWidth + "&height=" + screenHeight);
        console.warn( webgl.getParameter( ext.UNMASKED_RENDERER_WEBGL ) + " - Видеокарта" );

        resolve();
    }, 2000);
})

dataPC.then(() =>{
    console.log("Promise resolved")
    
    var xhr = new XMLHttpRequest()

    // 2. Конфигурируем его: GET-запрос на URL 'phones.json'
    xhr.open('GET', 'configuration.txt', false);

    // 3. Отсылаем запрос
    xhr.send();

    // 4. Если код ответа сервера не 200, то это ошибка
    if (xhr.status != 200) {
      // обработать ошибку
      alert( xhr.status + ': ' + xhr.statusText ); // пример вывода: 404: Not Found
    } else {
        repl = document.getElementById("replace")
        repl.innerHTML = "Ваша конфигурация, используемая в браузере уже на сервере (Вообще такие моменты стоит реализовывать через базы данных): " + xhr.response;
    }
})

