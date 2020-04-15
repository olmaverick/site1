<?php
 $title='Регистрация на сайте';
 $style=' h1 {
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
      #email_info{
        color:red;
    
      }
      
      .modalDialog:target {
	    display: block;
	    pointer-events: auto;
      }

      .modalDialog > div {
        width: 400px;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#999));
        background: -webkit-linear-gradient(#fff, #999);
        background: -moz-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
        background: linear-gradient(#fff, #999);
      }
      
      .close {
      	background: #606061;
      	color: #FFFFFF;
      	line-height: 25px;
      	position: absolute;
      	right: -12px;
      	text-align: center;
      	top: -10px;
      	width: 24px;
      	text-decoration: none;
      	font-weight: bold;
      	-webkit-border-radius: 12px;
      	-moz-border-radius: 12px;
      	border-radius: 12px;
      	-moz-box-shadow: 1px 1px 3px #000;
      	-webkit-box-shadow: 1px 1px 3px #000;
      	box-shadow: 1px 1px 3px #000;
        
      }

.close:hover { background: #00d9ff; }';
 include ('php/header.php');
 ?>
    <div class="container py-5">
      <div class="col-md-5 m-auto my-5 form-block py-2 px-3">
        <h1 class="text-center my-3">Регистрация на сайте</h1>
        <form action="php/obr_reg.php" method="POST"  onsubmit="js_code(this);return false; ">
          
          <div class="form-group">
            <input required name="email" type="email" class="form-control" placeholder="E-mail (login)">
          </div>
          <p   align="center" id="email_info"></p>
          <div class="form-group">
            <input required name="name" type="text" class="form-control" placeholder="Имя">
          </div>
          <div class="form-group">
            <input required name="lastname" type="text" class="form-control" placeholder="Фамилия">
          </div>
          <div class="form-group">
            <input required name="pass" type="password" class="form-control" placeholder="Пароль">
          </div>
          <div id='info'></div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Регистрация">
          </div>
        </form>
      </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="Modallabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" align="center">
        Регистрация успешна!
      </div>
    </div>
  </div>
</div>
   <script>
   
    function js_code(form)
    {
      console.log("enter");
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
            str+="<br \/>добавьте в пароль заглавную букву";
            error=true;
          }
          if ((z.match(/[a-z]/gi)==null)&&(z.match(/[а-я]/gi)==null))
          {
            str+="<br \/> добавьте в пароль строчную букву";
            error=true;
          }
          if ((z.length)<8) 
          {
            str+="<br \/> пароль от восьми символов";
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
          console.log("найден пароль");
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
           if (xhr.responseText == '2') 
           {
             $('#Modal1').modal('show');
             email_info.innerHTML='';
              let timeOut = setTimeout (() =>          //один раз ждём секунду перед тем как обновить страницу
                { 
                  document.location.href = "http://olmaverick.beget.tech/mysite/auth.php";
                },3000);
           }
           else 
           if (xhr.responseText == '1') email_info.innerHTML='такой пользователь уже есть';
           else                         alert('error');
           
          }
        }
      }
     
    }
    </script>
     <?php include('php/footer.php') ?>
   
