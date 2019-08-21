<?php  

$conn = mysqli_connect("localhost", "root", "", "arkademy");

$query = "SELECT engineer.id_engineer, engineer.name, work.work, salary.salary
		  FROM ((engineer
		  INNER JOIN work ON engineer.work = work.id_work)
		  INNER JOIN salary ON engineer.salary = salary.id_salary)
";

$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Work</th>
              <th scope="col">Salary</th>
            </tr>
          </thead>
          <tbody>
          	<?php $i = 1; ?>
          	<?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $row["id_engineer"]; ?></td>
              <td><?= $row["name"]; ?></td>
              <td><?= $row["work"]; ?></td>
              <td><?= $row["salary"]; ?></td>
            </tr>
            <?php $i++; ?>
        	<?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>