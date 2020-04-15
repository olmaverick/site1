<?php
include('../php/header.php');
if ($session_is_empty):
?>
     <div class="container my-5">
      <h1 class="text-center">зарегистрируйся!</h1>
      <p>зарегистрируйся! ато атата</p>
    </div>
<?php else:?>
    <div class="container my-5">
      <h1 class="text-center">Article 2</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptatem, consequuntur!</p>
    </div>
  <?php
    endif;
  include('../php/footer.php');
  ?>
