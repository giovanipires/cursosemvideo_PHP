<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | vetor 02</title>
</head>
<body>
   <div>
      <h2>Falando de vetores</h2>
      <pre>
         <?php
         $vetor = range(5,20,2);
         print_r($vetor);
         echo "<br>";
         $vetor[] = 21;
         print_r($vetor);
         ?>
      </pre>
   </div>
</body>
</html>
