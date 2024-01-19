<?php 
  include './add.php/header.php';
  include './add.php/db_connect.php';

  


  
  if(isset($_POST['submit'])){
    $list= $_POST['list'];
  

    $sql = "INSERT INTO user (list)
    VALUE ('$list')";

    $conn->query($sql);
  }


  include './todoread.php';


?>


<body>
    <div class="container mt-5">
        <form action="./todo.php" method="POST">
            <div class="form-group">
                <label for="list"></label>
                <input type="text" id="list" name="list" class="form-control">
                <label for="id"></label>
                <input type="hidden" id="id" name="id" class="form-control">
                <input type="submit" name="submit" value="DONE" class="btn btn-primary mt-2">
            
    </div>


    <div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">LIST</th>
            
        
         </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <th scope="row"><?php echo $row['list']; ?></th>
                  
                    <td><a href="./update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                    <a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
     </style> 