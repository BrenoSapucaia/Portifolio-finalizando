<?php 
$itens = [
    
     [ 'href' => 'projetos', 'texto' =>'Projetos ' ],
     [ 'href' => 'projetos', 'texto' => 'Github' ],
     [ 'href' => 'projetos', 'texto' => 'Linkedin' ],
     [ 'href' => 'projetos', 'texto' => 'Twitter' ],
];
 ?>
 <header class="mx-auto max-w-screen-lg px-3 py-6 flex justify-between">
         <!-- Logo -->
         <div class="font-bold text-xl text-cyan-600">
             🐼 Meu Portfólio ...
         </div>
 <div class="">
         <ul class="flex gap-x-6 font-medium text-gray-200">
             <li>
             <?php foreach($itens as $item): ?>
              
                 <li>
                     <a href="<?=$item['href'] ?>" class="hover:underline">Projetos
                 </a>
                 </li>             <?php endforeach; ?>
                    </ul>        </div>
    </header>