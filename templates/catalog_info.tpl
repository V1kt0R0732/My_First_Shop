{if ($id_photo == $photo_id_main)}
    <img src="img/{$main_photo}" width="200px"><br>
    {section loop = $allPhoto name = i}
        <a href="catalog_info.php?id={$catalog_id}&id_photo={$allPhoto[i].photo_sec_id}"><img src="img/{$allPhoto[i].photo_sec}" width="100px"></a>
    {/section}
    {else}
    {section loop = $allPhoto name = i}
        {if (isset($id_photo) && !empty($id_photo) && $id_photo == $allPhoto[i].photo_sec_id)}
            <img src="img/{$allPhoto[i].photo_sec}" width="200px"><br>
        {/if}
    {/section}
    {section loop = $allPhoto name = i}
        {if (isset($id_photo) && !empty($id_photo) && $id_photo != $allPhoto[i].photo_sec_id)}
            <a href="catalog_info.php?id={$catalog_id}&id_photo={$allPhoto[i].photo_sec_id}"><img src="img/{$allPhoto[i].photo_sec}" width="100px"></a>
        {/if}
    {/section}
        <a href="catalog_info.php?id={$catalog_id}&id_photo={$photo_id_main}"><img src="img/{$main_photo}" width="100px"></a>
{/if}



<h4>Назва товару: "{$name}"</h4>
<h4>Ширина:{$wight} Висота:{$height}</h4>
<h4>Матеріал: {$material}</h4>
<h4>Колір: {$color}</h4>
<h4>Кількість в наявності: {$colvo}</h4>
<h4>Категорія: {$category}</h4>
<h4>Повний опис товару:</h4>
<p>{$fulldescription}</p>
<h5>Ціна: <b>{$price}</b></h5>
<a href="catalog.php">Назад</a>