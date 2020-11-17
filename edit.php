<html>
  <head>
    <title>Comment Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'natthawalee.mysql.database.azure.com', 'natthawalee@natthawalee', 'Jungjing2184', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    $result = mysqli_query($conn,"SELECT * FROM guestbook WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
    ?>

    <div style="margin-top: 3rem;" class="container">
      <form action="editupdate.php" method="post" id="CommentForm">
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <div class="form-group">
        Name:<br>
        <input type="text" class="form-control" name="name" id="idName" value="<?php echo $row['name']; ?>" placeholder="Enter Name"> <br>
        Comment:<br>
        <textarea rows="10" cols="20" name="comment" class="form-control" id="idComment" value="<?php echo $row['comment']; ?>" placeholder="Enter Comment"></textarea><br>  
        Link:<br>
        <input type="text" class="form-control" name="link" id="idLink" value="<?php echo $row['link']; ?>" placeholder="Enter Link"> <br><br>
        <input class="btn btn-dark" type="submit" id="commentBtn">
        </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>