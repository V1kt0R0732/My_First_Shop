<form action="indexCatalog.php" method="get">
    <select name="category">
        <option value="0">Всі категорії</option>
        {section loop = $category name = k}
            {if ($r_category == $category[k].id)}
                <option value="{$category[k].id}" selected>{$category[k].name}</option>
            {else}
                <option value="{$category[k].id}">{$category[k].name}</option>
            {/if}
        {/section}
    </select>
    <input type="submit" name="send" value="Застосувати">
</form>

{if ($count > 0)}
<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th colspan="2">Управління</th>
    </tr>

    {section loop = $tovar name = i}
        <tr>
            <td>{$tovar[i].num}</td>
            <td><img width="125px" src="../img/{$tovar[i].photo}"></td>
            <td>{$tovar[i].name}</td>
            <td><a href="dellCatalog.php?id={$tovar[i].id}&name={$tovar[i].name}">Видалити</a></td>
            <td><a href="updateCatalog.php?id={$tovar[i].id}">Редагувати</a></td>
        </tr>
    {/section}



</table>
{else}
    <h4>Нажаль в даній категорії ще не має товарів</h4>
{/if}