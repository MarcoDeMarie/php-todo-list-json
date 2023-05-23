<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>Document</title>
</head>
<body>
  <main>
    <div id="app">
    <div class="container col-3 bg-secondary py-2 my-5">
      <h1>TO DO LIST</h1>
      <div class="tasks">
        <ul v-for="item in list">
          <li>{{ item.text }}<i class="fa-solid fa-trash-can"></i></li>
        </ul>
      </div>
      <div class="add-tasks">
        <input type="text" name="newTask" placeholder="Inserisci nuova task">
        <button type="button" class="btn btn-primary mx-3">Add Task</button>
      </div>
    </div>
    </div>
  </main>
  <script src="main.js"></script>
</body>
</html>