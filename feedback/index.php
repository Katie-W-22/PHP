<?php
include 'includes/header.php';
//could also use require or require_once
?>

    <img src="/php-katie/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2 style="color: lightblue;">Feedback Time!</h2>
    <p class="lead text-center">Please leave feedback for Katie's Cakes</p>
    <form action="" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label ">Feedback</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100" style="color: lightblue;">
      </div>
    </form>

    <?php 
    include 'includes/footer.php';?>
