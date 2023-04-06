<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form method="post" action="add" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="mname" class="form-label">Name</label>
          <input type="text" class="form-control" id="mname" name="name" >
        </div>
        <div class="mb-3">
            <label for="memail" class="form-label">Email</label>
            <input type="text" class="form-control" id="memail" name="email" >
          </div>
          <div class="mb-3">
            <label for="mphone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="mphone" name="phone" >
          </div>
          <div class="mb-3">
            <label for="maddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="maddress" name="address" >
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</body>
</html>