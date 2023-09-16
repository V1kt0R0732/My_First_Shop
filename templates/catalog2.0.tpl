{* Сортутування *}



{* ////////////////////////// *}
    {* Вивід товара *}

<div class="main__catalog catalog">
    <div class="catalog__container _container">
        {section loop = $catalog name = k}
            <div class="catalog__block block">
                <div class="catalog__body">
                    <a href="catalog_info.php?id={$catalog[k].id}" class="block__img">
                        <img src="img/{$catalog[k].photo}" alt="phone" width="160px">
                    </a>
                    <div class="block__body">
                        <h2 class="body__title">{$catalog[k].name}</h2>
                        <h3 class="body__title">Ширина: {$catalog[k].wight}см.</h3>
                        <h3 class="body__title">Висота: {$catalog[k].height}см.</h3>
                        <div class="body__price">
                            <div class="price__number">{$catalog[k].price}</div>
                            <a href="">
                                <button class="price__button">Придбати</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {/section}
    </div>
</div>

{* ///////////////////////////// *}

{* Листалка *}
{*
<div>
    <table>
        <tr>
            {if $active_page != 0}
                {if $active_page == 1}
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> < </td>
                {else}
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page - 1}&id_cat={$id_cat}&min_price={$min_price}&max_price={$max_price}"> < </a></td>
                {/if}
                {for $k = 1; $k <= $count_page; $k++}
                    {if ($active_page == $k)}
                        <td style="background-color:#bbb8b8; padding:7px; border-radius:10px">{$k}</td>
                    {else}
                        <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$k}&id_cat={$id_cat}&min_price={$min_price}&max_price={$max_price}">{$k}</a></td>
                    {/if}
                {/for}
                {if $active_page == $count_page}
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> > </td>
                {else}
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page + 1}&id_cat={$id_cat}&min_price={$min_price}&max_price={$max_price}"> > </a></td>
                {/if}
            {/if}
        </tr>
    </table>
</div>
*}


{*
{* Сортутування *}

<ul>
    <li><a href="catalog.php?sort=ask&id_cat={$id_cat}">За ціною/зменшення</a></li>
    <li><a href="catalog.php?sort=desc&id_cat={$id_cat}">За ціною/збільшення</a></li>
</ul>




{* ////////////////////////// *}
{* Фільтрація *}
{*
<div>
<form action="catalog.php" method="get">
    <h4>Сортування</h4>
    Мінімальна ціна: <input type="number" name="min_price" {if isset($min_price) && !empty($min_price)}value="{$min_price}"{else} placeholder="0"{/if} min="0">
    Максимальна ціна: <input type="number" name="max_price" {if isset($max_price) && !empty($max_price)}value="{$max_price}"{else} placeholder="1000000"{/if}>
    <input type="hidden" name="id_cat" value="{$id_cat}">
    <input type="submit" name="send" value="Фільтрувати">
</form>
</div>
*}

{* ///////////////////////////// *}
{* Вивод товара *}

<div class="main__catalog catalog">
    <div class="catalog__container _container">
        {section loop = $catalog name = k}
            <div class="catalog__block block">
                <div class="catalog__body">
                    <a href="catalog_info.php?id={$catalog[k].id}" class="block__img">
                        <img src="img/{$catalog[k].photo}" alt="phone" width="160px">
                    </a>
                    <div class="block__body">
                        <h2 class="body__title">{$catalog[k].name}</h2>
                        <h3 class="body__title">Ширина: {$catalog[k].wight}см.</h3>
                        <h3 class="body__title">Висота: {$catalog[k].height}см.</h3>
                        <div class="body__price">
                            <div class="price__number">{$catalog[k].price}</div>
                            <a href="">
                                <button class="price__button">Придбати</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {/section}
    </div>
</div>

{* ///////////////////////////// *}

{* Листалка *}

<div>
    <table>
        <tr>
            {if $active_page != 0}
                {if $active_page == 1}
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> < </td>
                {else}
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page - 1}&id_cat={$id_cat}&min_price={$min_price}&max_price={$max_price}"> < </a></td>
                {/if}
                {for $k = 1; $k <= $count_page; $k++}
                    {if ($active_page == $k)}
                        <td style="background-color:#bbb8b8; padding:7px; border-radius:10px">{$k}</td>
                    {else}
                        <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$k}&id_cat={$id_cat}&min_price={$min_price}&max_price={$max_price}">{$k}</a></td>
                    {/if}
                {/for}
                {if $active_page == $count_page}
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> > </td>
                {else}
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page + 1}&id_cat={$id_cat}&min_price={$min_price}&max_price={$max_price}"> > </a></td>
                {/if}
            {/if}
        </tr>
    </table>
</div>

{* ///////////////////////////// *}

{*
<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>Висота</th>
        <th>Ширина</th>

        <th>Детальніше</th>
    </tr>
    {section loop = $catalog name = k}
        <tr>
            <td>{$catalog[k].num}</td>
            <td><img src="img/{$catalog[k].photo}" width="80px"></td>
            <td>{$catalog[k].name}</td>
            <td>{$catalog[k].price}</td>
            <td>{$catalog[k].height}</td>
            <td>{$catalog[k].wight}</td>
            <td><a href="catalog_info.php?id={$catalog[k].id}">Click</a></td>
        </tr>
    {/section}



</table> *}



*}