<form action="basket.php" method="post">
<table border="2" style="margin-left:20px">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>Кількість</th>
        <th>Вартість</th>
        <th>Видалити</th>
    </tr>
    {section loop = $basket name = k}
        <tr>
            <td>{$basket[k].num}</td>
            <td><img width = 80px src="img/{$basket[k].photo}"></td>
            <td>{$basket[k].name}</td>
            <td>{$basket[k].price}</td>
            <td><input name="count{$basket[k].id}" type="number" min="1" value="{$basket[k].count}"></td>
            <td>{$basket[k].sum}</td>
            <td><a href="basket.php?id={$basket[k].id}&mode=dell">Видалити</a></td>
        </tr>
    {/section}
    <tr>
        <th colspan="5">Всього до сплати</th>
        <th colspan="2">{$total_price}</th>
    </tr>
    <tr>
        <th colspan="5"><a href="basket.php?mode=clear">Очистити</a></th>
        <th colspan="2"><a href="order_buy.php">Сплатити</a></th>
    </tr>
    <tr>
        {if isset($ready_params) && !empty($ready_params)}
            <th colspan="4"><a href="catalog.php?{$ready_params}">Повернутись до каталогу</a></th>
            <input type="hidden" name="ready_params" value="{$ready_params}">
            {else}
            <th colspan="4"><a href="catalog.php">Повернутись до каталогу</a></th>
        {/if}
        <th colspan="3"><input type="submit" name="send" value="Перерахувати"></th>
    </tr>

</table>
</form>
