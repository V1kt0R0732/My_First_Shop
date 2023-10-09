{* Сортутування *}

<h5 style="background-color:#d6d6d6; border-radius:15px; padding-left:20px; margin: 10px 430px 5px 20px;">
    <a href="catalog.php?sort=desc{if isset($id_cat)}&id_cat={$id_cat}{/if}&page={$active_page}&min_price={$min_price}&max_price={$max_price}{if isset($search) && !empty($search)}&search={$search}{/if}">
        Від дешевих до дорогих
    </a> |
    <a href="catalog.php?sort=asc{if isset($id_cat)}&id_cat={$id_cat}{/if}&page={$active_page}&min_price={$min_price}&max_price={$max_price}{if isset($search) && !empty($search)}&search={$search}{/if}">
        Від дорогих до дешевих
    </a>
</h5>

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
                            {if $catalog[k].colvo == 0}
                                Товар закінчився на складі
                            {else}
                                <a href="basket.php?id={$catalog[k].id}&mode=add{if isset($active_page) && !empty($active_page)}&page={$active_page}{/if}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_cat) && !empty($id_cat)}&id_cat={$id_cat}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}{if isset($min_price, $max_price)}&min_price={$min_price}&max_price={$max_price}{/if}{if isset($note) && !empty($note)}&note={$note}{/if}">
                                    <button class="price__button">Придбати</button>
                                </a>
                            {/if}

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
    <table style="margin-left:375px">
        <tr>
            {if $active_page != 0}
                {if $active_page == 1}
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> < </td>
                {else}
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page - 1}{if isset($id_cat)}&id_cat={$id_cat}{/if}{if isset($sort)}&sort={$sort}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}min_price={$min_price}&max_price={$max_price}{if isset($note)}&note={$note}{/if}"> < </a></td>
                {/if}
                {for $k = 1; $k <= $count_page; $k++}
                    {if ($active_page == $k)}
                        <td style="background-color:#bbb8b8; padding:7px; border-radius:10px">{$k}</td>
                    {else}
                        <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$k}{if isset($id_cat)}&id_cat={$id_cat}{/if}{if isset($sort)}&sort={$sort}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}&min_price={$min_price}&max_price={$max_price}{if isset($note)}&note={$note}{/if}">{$k}</a></td>
                    {/if}
                {/for}
                {if $active_page == $count_page}
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> > </td>
                {else}
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page + 1}{if isset($id_cat)}&id_cat={$id_cat}{/if}{if isset($sort)}&sort={$sort}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}&min_price={$min_price}&max_price={$max_price}{if isset($note)}&note={$note}{/if}"> > </a></td>
                {/if}
            {/if}
        </tr>
    </table>
</div>

