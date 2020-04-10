
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Регистрация на сайте</title>
    <style>
      h1 {
        text-align:center;
      }
      form>div {
        margin-top:2em;
        text-align: center;
      }
            body{
        background: url(img/depositphotos.jpg);
        background-size: cover;
      }
      .form-block {
        background: rgb(0,0,0,.5);
        border-radius:1%;
        box-shadow:0 0 10px rgb(0,0,0, 0.3);
      }
      h1 {color:white;}
      #info{
        color:white;
      }
    </style>
    
  </head>
  <body>
    <div class="container py-5">
      <div class="col-md-5 m-auto my-5 form-block py-2 px-3">
        <h1 class="text-center my-3">Регистрация на сайте</h1>
        <form action="obr_reg.php" method="POST"  onsubmit="js_code(this); return false; ">
          <div class="form-group">
            <input required name="email" type="email" class="form-control" placeholder="E-mail (login)">
          </div>
          <div class="form-group">
            <input required name="name" type="text" class="form-control" placeholder="Имя">
          </div>
          <div class="form-group">
            <input required name="lastname" type="text" class="form-control" placeholder="Фамилия">
          </div>
          <div class="form-group">
            <input required name="pass" type="password" class="form-control" placeholder="Пароль">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Регистрация">
          </div>
          <div id='info'></div>
        </form>
      </div>
    </div>
  <script>
   
    function js_code(form)
    {
      let str="";
      let error=false;
      let xhr=new XMLHttpRequest();
      let send_str='';
      for (let i=0;i<form.length-1;i++)
      {
        send_str+=form.elements[i].name+'='+form.elements[i].value+'&';
        if (form.elements[i].name=="pass")
        {
          let z=form.elements[i].value;
          if (z.match(/[0123456789]/gi)==null)  
          {
            str+="<br \/> нет цифр в пароле!";
            error=true;
          }
          if ((z.match(/[A-Z]/gi)==null)&&(z.match(/[А-Я]/gi)==null))
          {
            str+="<br \/> в пароле должна быть заглавная буква!";
            error=true;
          }
          if ((z.match(/[a-z]/gi)==null)&&(z.match(/[а-я]/gi)==null))
          {
            str+="<br \/> в пароле должна быть строчная буква!";
            error=true;
          }
          if ((z.length)<8) 
          {
            str+="<br \/> длина пароля должна быть не менее восьми символов!";
            error=true;
          }
          
          if (error==true)
          {
            info.innerHTML=str;
            let timeOut = setTimeout (() =>          //один раз ждём секунду перед тем как обновить страницу
                { 
                  location.reload();
                },3000);
          }
          //console.log("найден пароль");
        }
      }
      
      if (!error)
      {
        xhr.open('POST','obr_reg.php');
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.send(send_str);
        xhr.onreadystatechange = function() 
        {
          if (xhr.readyState == 4 && xhr.status==200) 
          {
            info.innerHTML="Письмо отправлено!";
          } else  
          {
           info.innerHTML="Возникла ошибка";
          }
        }
      }
     
    }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
