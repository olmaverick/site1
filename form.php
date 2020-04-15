  <!doctype html>
  <html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Отправка формы</title>
  </head>
  <body>
    <form action="obr_form.php" method ="POST" onsubmit=" send(this);return false;">
      <div>
          <input type="text" name="name" placeholder="Имя">
      </div>
      <div>
        <input type="text" name="email"placeholder="E-mail">
      </div>
       <div>
        <textarea name="text"placeholder= "Сообщение"></textarea>
      </div>
      <div>
         <input type="submit">
      </div>
    </form>
    <div id="info"></div>
    <script>
      function send(form){
        let xhr=new XMLHttpRequest();
        let send_str='';
        for (let i=0; i<form.length-1;i++){
          send_str+=form.elements[i].name+'='+form.elements[i].value+'&';
          }
          console.log(send_str);
          
          xhr.open('POST', 'obr_form.php');
          xhr.setRequestHeader ('Content-Type' ,'application/x-www-form-urlencoded');
          xhr.send(send_str);
           xhr.onreadystatechange=function() {
             if(xhr.readyState== 4 && xhr.status==200) {
               info.innerHTML="Письмо отправлено";
        }
        else {
           info.innerHTML="Возникла ошибка";
           
          
        }
       }
      }   
      
    </script>
  </body>
</html>
