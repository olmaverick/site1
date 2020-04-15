<?php
$title='My first site';
$style='.big-icon{
        font-size:13rem;
      }
      .big-icon+p {
        font-size:2rem;
      }
      
      @media only screen and (min-device-width:320px) and (max-device-width:800px)
      {
        .info{
        background: rgb(0,0,0, .5);
        width:20rem;
        border:2px solid white;
        margin:auto;
        padding:1rem;
        color:white;
        font-size:0.8rem;
        box-shadow: 0 0 rgb(0,0,0,.2);
        }
        
        .bg-img{
          background: url("img/backgraund.jpg");
          background-size:cover;
          padding:2rem;
          }
      }
      
      @media only screen and (min-device-width:1024px)
      {
        .info{
        background: rgb(0,0,0, .5);
        width:35rem;
        border:4px solid white;
        margin:auto;
        padding:2rem;
        color:white;
        font-size:1.2rem;
        box-shadow: 0 0 rgb(0,0,0,.5);
        }
        
        .bg-img{
        background: url("img/backgraund.jpg");
        background-size:cover;
        padding:4rem;
      }
      }';
      include('php/header.php');
?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div class="container my-4">
      <h1 class="text-center">Занятие на карантине</h1> 
      <div class="row text-center mt-3">
       <div class="col-sm-4"</div>
         <i class="fas fa-home big-icon"></i>
         <p> Сидеть дома</p>
         </div>
        <div class= "col-sm-4"> 
        <i class="fas fa-coffee big-icon "></i>
          <p> Пить кофе </p>
         </div>
          <div class="col-sm-4">
            <i class="fas fa-code big-icon"></i>
              <p> Кодить</p>
          </div>
        </div>
      </div>
        
         <div class="container-fluid bg-img">
           <div class="info">
             

Почему он используется?
Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).


           </div>
          </div>
          
      <div class="container my-4">
        <div class="row">
          <div class="col-sm-4">
          <h4>Контакты</h4>
          <p>
            <b>Адрес:</b><br>
            г.Москва ул.Академика Скрябина д9 к2 стр4
          </p>
          <p>
            <b>Телефон:</b><br>
            +7 495 111-11-11
            </p>
            <p>
            <b>Время работы:</b><br>
            ПН-ПТ с 8:30 до 18:30
          </p>
          </div>
           <div class="col-sm-8">
           <h4  class="text-center">Напишите нам</h4>
           <form action="obr_form.php" method="POST" onsubmit="send(this); return false;">
             <div class="form-group">
             <input type="text" name="name" class="form-control" placeholder="Имя">  
             </div>
             <div class="form-group">
             <input type="text" name="email" class="form-control" placeholder="E-mail">  
             </div>
             <div class="form-group">
             <textarea name="text" class="form-control" placeholder="Сообщение"></textarea>  
             </div>
             <div class="form-group">
             <input type="submit" class="form-control btn btn-primary">  
             </div>
           </form>
           <script>
             function send(form){
              let xhr=new XMLHttpRequest();
              let send_str='';
              for (let i=0;i<form.length-1;i++){
                send_str+=form.elements[i].name+'='+form.elements[i].value+'&';
            }
            console.log(send_str);
            xhr.open('POST','obr_form.php');
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xhr.send(send_str);
            xhr.onreadystatechange = function() {
              if (xhr.readyState == 4 && xhr.status==200) {
                info.innerHTML="Письмо отправлено!";
               } else  {
                 info.innerHTML="Возникла ошибка";
               }
              }
            }
           </script>
           </div>
          </div>
        </div>
          
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7ad915ddefd3f85bd1a1b994017a751d29a7dafdc420039298b0d629a56526f9&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true">
          </script>
    
    <footer "container">
      &copy;2020 ГБОУ "Профессионал"
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
