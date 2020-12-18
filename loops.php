//WHILE
$last_num = 1;
while ($last_num < 10) {
    print($last_num);
    $last_num = $last_num + 1;
}


//WHILE IN HTML
<?php
$pages_count = 3;
$cur_page = 1;
?>

<ul class="pagination__control">
  <?php while ($cur_page <= $pages_count) { ?>
    <li class="pagination__item">
      <a href="?page=<?=$cur_page;?>"><?=$cur_page;?></a>
    </li>
<?php $cur_page++; } ?>
</ul>


//Еще WHILE in HTML
<?php
$categories = ["Видеоигры","Животные","Люди","Наука","Приколы","Спорт","Фейлы","Фильмы"];
?>

<div class="navigation_item">
 <h3 class="navigation_title">Категории</h3>
    <nav class="navigation_links">       
        <?php $index = 0;
        $num = count($categories);
        while ($index < $num) {
            $cat = $categories[$index];
            print ('<a href="#">' . $cat .'<a>');
            $index = $index + 1;
        } ?>   
    
</nav>

</div>
