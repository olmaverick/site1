<?php session_start(); ?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Личный кабинет</title>
    <style>
     body{
        background: url(img/Обои.jpg);
        background-size: cover;
      }
      .change-btn{
        color:RoyalBlue;
        cursor:pointer;
      }
      .change-btn:hover{
        color:blue;
      }
      .save-btn{
        color:lime;
        cursor:pointer;
      }
      .save-btn:hover{
        color:green;
      }
      .cancel-btn{
        color:red;
        cursor:pointer;
      }
      .cancel-btn:hover{
        color:darkRed;
      }
    </style>
  </head>
  <body>
    <div class="container my-5">
      <p>Имя    :<span><?= $_SESSION['name'];     ?>        </span>
                 <span class="change-btn">       [изменить ]</span>
                 <span class="save-btn"  hidden data-about="name"    >[сохранить]</span>
                 <span class="cancel-btn"hidden >[отменить ]</span>
      </p>
      <p>Фамилия:<span><?= $_SESSION['lastname']; ?>        </span>
                 <span class="change-btn">       [изменить ]</span>
                 <span class="save-btn"  hidden data-about="lastname">[сохранить]</span>
                 <span class="cancel-btn"hidden >[отменить ]</span>
      </p>
      <p>E-mail :<?= $_SESSION['email'];    ?></p>
      <p>ID     :<?= $_SESSION['id']        ?></p>
    </div>
    
    <script>
      
      let changeBtn=document.getElementsByClassName('change-btn');
      let   saveBtn=document.getElementsByClassName('save-btn');
      let cancelBtn=document.getElementsByClassName('cancel-btn');
      let tmp_name    =changeBtn[0].previousElementSibling.innerText;
      let tmp_lastname=changeBtn[1].previousElementSibling.innerText;
      console.log(tmp_name);
      console.log(tmp_lastname);
      
      for (let i=0; i<changeBtn.length; i++){
        changeBtn[i].addEventListener('click',()=>{
        let value = changeBtn[i].previousElementSibling.innerText;
        changeBtn[i].previousElementSibling.innerHTML =`<input type="text" value="${value}">`;
        changeBtn[i].hidden=true;
        saveBtn  [i].hidden=false;
        cancelBtn[i].hidden=false;
        });
        
        saveBtn[i].addEventListener('click',()=>{
          let xhr  = new XMLHttpRequest();
          let value=changeBtn[i].previousElementSibling.firstElementChild.value;
          let about=saveBtn[i].dataset.about;
          xhr.open('GET',`obr_lk.php?about=${about}&value=${value}`);
          xhr.send();
          changeBtn[i].hidden=false;
          saveBtn  [i].hidden=true;
          cancelBtn[i].hidden=true;
          changeBtn[i].previousElementSibling.innerHTML = value;
        });
        
        cancelBtn[i].addEventListener('click',()=>{
          changeBtn[i].hidden=false;
          saveBtn  [i].hidden=true;
          cancelBtn[i].hidden=true;
          changeBtn[0].previousElementSibling.innerText=tmp_name;
          changeBtn[1].previousElementSibling.innerText=tmp_lastname;
          
        });
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
