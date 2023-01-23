<?php

$arg = $args['args'];
$array = array_slice(get_field($arg, 2), 3);

?>

<div class="flex items-center justify-center h-full">
  <div class="max-w-[700px] h-auto bg-white rounded scroll-auto">
    <div class="flex justify-between w-full px-4 pt-4">
      <p class="uppercase text-blue px-4 py-4">
        <?php

          echo ($arg === 'imagens_pat') ? 'PATROCÍNIO' : 'APOIO';
        
        ?>
      </p>    
      <button class="close-modal px-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#1c1c1e" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>
    </div>
    <div class="grid gap-4 grid-cols-2 sm:grid-cols-4 px-6 py-6">
      <?php
      

        foreach($array as $img) :

          ?>
          <img src="<?php echo $img; ?>" alt="Logo Sayerlack">
          <?php

        endforeach;

      ?>
    </div>
  </div>
</div>