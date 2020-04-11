<html lang="ru"><head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      body{
        height:100%;
        background: url(img/depositphotos_10.jpg) no-repeat;
        background-position:center center;
        background-attachment: fixed;
        background-size: cover;
      }
      .col-sm-5{
        margin:25%;
        box-shadow: 0 0 5px rgb(255,255,255,.9);
        padding:1rem;
        background: rgb(255,255,255,.2);
        border-radius:15px;
      }
      .form-group{

      }
      #btn1{
         visibility: hidden;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-sm-5">
          <h1 class="text-center text-light mb-4">Вход на сайт</h1>
          <form action="obr_auth.php" method="POST" onsubmit="send(this); return false;">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </div>
                </div>
                <input required name="email" type="email" class="form-control" placeholder="E-mail ">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                  </div>
                </div>
                <input required name="pass" type="password" class="form-control"  placeholder="Пароль">
              </div>
              <p align="center" style="color:white;" id="info"></p>
            </div>
            <input id="btn1" class="form-control btn btn-primary" type="submit" value="Войти" >
          </form>
        </div>
      </div>
    </div>
    <script>
      function send(form)
      {
        let btn1 = document.getElementById("btn1");
        let str="";
        let error=false;
        let xhr=new XMLHttpRequest();
        let send_str='';
        for (let i=0;i<form.length;i++)
        {
          send_str+=form.elements[i].name+'='+form.elements[i].value+'&';
        }
      
        xhr.open(form.method,form.action);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.send(send_str);
        xhr.onreadystatechange = ()=> 
          {
             if (xhr.readyState   == 4 && xhr.status==200) 
            {
             if (xhr.responseText == 2) 
             {
              // info.innerHTML='успешно';
              if (btn1.style.visibility=="visible") document.location.href ="http://olmaverick.beget.tech/php_education/lk.php" 
                  btn1.style.visibility="visible";   
             }
             else 
             if (xhr.responseText == 0) 
             {
               info.innerHTML='Логин или пароль введён неверно!';
               let timeOut = setTimeout (() =>          //один раз ждём секунду перед тем как обновить страницу
                { 
                  location.reload();
                },3000);
             }
             else   alert('error');
            }
          }
        }
    </script>
  
</body></html>
