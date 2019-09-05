<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Database & Design Project,,,</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row">
      <h1>Project</h1>
    </div>
    <div class="row">
      <div class="col">
        <a class="btn btn-primary btn-block" href="./createTable.php" role="button">
          CREATE TABLE
        </a>
      </div>
      <div class="col">
        <a class="btn btn-primary btn-block" href="./insertStudent.php" role="button">
          INSERT STUDENT
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!-- 
          1.GET www.google.com?name=areee&tel=1234
          2.POST 
         -->
        <form method="GET" action="./insertStudentForm.php">
          <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
            <small id="nameHelp" class="form-text text-muted">กรอกชื่อของคุณ</small>
          </div>
          <div class="form-group">
            <label for="name">Tel: </label>
            <input type="text" class="form-control" name="phoneNumber" placeholder="Enter phonenumber">
            <small id="nameHelp" class="form-text text-muted">กรอกเบอร์โทรของคุณ</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>