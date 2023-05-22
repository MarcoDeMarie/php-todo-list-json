<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <main>
    <div class="container col-3 bg-secondary py-2 my-5">
      <h1>TO DO LIST</h1>
      <div class="tasks d-flex">
        <ul>
          <li>task 1<i class="fa-solid fa-trash-can"></i></li>
          <li>task 2<i class="fa-solid fa-trash-can"></i></li>
          <li>task 3<i class="fa-solid fa-trash-can"></i></li>
          <li>task 4<i class="fa-solid fa-trash-can"></i></li>
        </ul>
      </div>
      <div class="add-tasks">
        <input type="text" name="newTask" placeholder="Inserisci nuova task">
        <button type="button" class="btn btn-primary">Add Task</button>
      </div>
    </div>
  </main>
  
</body>
</html>