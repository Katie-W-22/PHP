<?php include 'includes/header.php' ?>

<?php

$sql = 'SELECT * FROM feedback';

$result = mysqli_query($conn, $sql);

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
   
    <h3 style="color: lightblue;">Feedback Received!</h3>
    
    <?php if(empty($feedback)): ?>
      <p>No feedback found</p>
      <?php endif; ?>

    <img src="/php-katie/feedback/img/feedback1.png" class="w-50 mb-3" alt="">

    <?php foreach($feedback as $item): ?>
        <div class="card my-3 w-75">
          <div class="card-body text-center">
            <?php echo $item['body']; ?>
            <div class="text-secondary mt-2">
              from <?php echo $item['name']; ?>
              on <?php echo $item['date']; ?>
            </div>    
          </div>
        </div>
    <?php endforeach; ?>   
   
<?php include 'includes/footer.php' ?>
