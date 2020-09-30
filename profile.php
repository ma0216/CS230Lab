<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>

  <?php
  if (isset($_SESSION['uid'])) {
    $prof_user = $_SESSION['username'];
    $sqlpro = "SELECT * FROM profile WHERE uname='$prof_user';";

    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $photo = $row['picpath'];
    $bio = $row['bio'];
  ?>

  <style>
    body{
      background-color: lightgrey;
      margin: 2em;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      margin-top: 5em;
      text-align: center;
      padding: 24px;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    #prof-display {
      display: block;
      width: 150px;
      margin: 10px auto;
      padding: 1em;
      border-radius: 50%;
    }

    #uname-style {
      font-size: 20px;
      font-family: "Lucida Console", Courier, monospace;
      font-weight: bold;
    }
  </style>

  <script>
    function triggered(){
      document.querySelector("#prof-image").click();
    }

    function preview(e){
      if(e.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
          document.querySelector('#prof-display').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);

      }
    }
  </script>

  <div class="card">
    <form action="includes/upload-helper.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <img src="<?php echo $photo; ?>" onclick="triggered();" id="prof-display">
        <label for="prof-image" id="uname-style"><?php echo $prof_user; ?></label>
        <input type="file" name="prof-image" id="prof-image" onchange="preview(this);" class="form-control" style="display: none;">
      </div>
      <div class="form-group">
        <textarea name="bio" id="bio" rows="5" cols="32" placeholder="Bio..." style="text-align: center;"><?php echo $bio; ?></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="prof-submit" class="btn btn-outline-success btn-lg btn-block">Upload</button>
      </div>
    </form>
  </div>

  <?php
  }
  else {
    header("Location: login.php");
    exit();
  }
  ?>

</main>
