<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialista em PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white">
    <?php include('./components/header.php'); ?>
   
<main class="mx-auto max-w-screen-lg min -h-20 px-3 py-y-6">
        <!-- Hero -->
      <?php include('./components/sobremim.php'); ?>  
      
      <h3 class="test-2xl font-bold h-2"> Meus Projetos</h3>
      <?php include('./components/chama.php'); ?>
             
    </main>
    
    
    <footer class="mx-auto max-w-screen-lg min-h-20 px-3">
       <!-- data  -->
        <div class="border-t border-gray-600"> ©️ copyright <?date('Y') ?>   . construido por, Breno Vieira.</div>
        <!-- links -->
         <div></div>
    </footer>
</body>
</html>
