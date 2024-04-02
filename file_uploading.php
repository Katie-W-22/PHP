<?php
if(isset($_POST['submit'])) {
   if(!empty($_FILES['upload']['name'])) {
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
        $file_name = $_FILES['upload']['name']; 
        $file_size = $_FILES['upload']['size'];
        echo "Your file with name: $file_name and size: $file_size has been uploaded successfully.";
        $target_dir = "uploads/$file_name";
        
      //get file extension of uploaded file
      $file_extension = explode('.', $file_name);

      $file_extension = strtolower(end($file_extension));

      echo "file extension type: $file_extension";

      //validate file extension
      if(in_array($file_extension, $allowed_extensions)) {
        //check file size
        if($file_size <= 1000000){
            //upload file
            move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color:green;">File uploaded successfully</p>';

        } else {$message = '<p style="color:red;">file is too large</p>';}
    } else{
          $message = '<p style="color:red;">Invalid file extension</p>';
      }


   }else{
    $message = '<p style="color:red;">Please select a file to upload</p>';
   }}
?>

<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>File to upload</title>
       
    </head>
    <body>
        <?php echo $message ?? null; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="upload">
            <input type="submit" value = "Submit" name= "submit">
        </form>
    </body>
</html>