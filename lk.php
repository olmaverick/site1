<?php session_start();
$title='Личный кабинет';
$style='body{
        background: url(img/_24837-269.jpg);
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
      }';
      include('php/header.php');
?>

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
          xhr.open('GET',`php/obr_lk.php?about=${about}&value=${value}`);
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

<?php include('php/footer.php');?>
