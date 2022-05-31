<?php include 'process.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="/css/styles.css">

  <title>The mysterious prime numbers</title>
</head>
<!-- navbar -->
<header>
  <nav class="navbar">
    <div class="navbar__container">
      <img src="/img/logo-alt.png" id="rtulogo" />
      <a href="/" id="navbar__logo">The mysterious prime numbers</a>
      <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="/about" class="navbar__links"> About </a>
        </li>
        <li class="navbar__btn">
          <a href="/" class="button__sign"> To Main </a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<body>
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-8">
        
        <table class="table">
          <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Stack</th>
                <th scope="col">Range start</th>
                <th scope="col">Range end</th>
                <th scope="col">Prime numbers</th>
                <th scope="col">Processing time</th>
              </tr>
            </thead>
          <tbody>

            <?php 
            require 'db.php';

            $query = $pdo->query('select * from `bakalavratest`');

            while($row = $query->fetch(PDO::FETCH_OBJ)){
              echo '<tr>';
              echo '<th scope="row">'.$row->data.'</th>';
              echo '<th scope="row">'.$row->stack.'</th>';
              echo '<td>'.$row->start.'</td>';
              echo '<td>'.$row->end.'</td>';
              echo '<td>'.$row->num.'</td>';
              echo '<td>'.$row->time.'</td>';
              echo '</tr>';
            }
            ?>
            
          </tbody>
        </table>

        <br>
        <a href="/clean">
          <button class="btn btn-primary">Clear all data</button>
        </a>
      </div>
      <div class="col-4">
        <form action="" method="post">
          <div class="info">
            <label for="exampleInputName" class="form-label">Range start</label>
          </div>
          <div>
            <input autocomplete="off" type="number" name="startD" placeholder="start" id="start" class="input-card">
          </div>
          <br>
          <div class="info">
            <label for="exampleInputSurame" class="form-label">Range end</label>
          </div>
          <div>
            <input autocomplete="off" type="number" name="endD" placeholder="end" id="end" class="input-card">
          </div>
          <br>
          <br>
          <button type="submit" value="Submit" name = "add" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div>
  </div>
</body>
<script src="/js/script.js"></script>

</html>