<h2>Clients</h2>
{if empty($client_order)}
    <h4>Замовлень не має</h4>
    {else}
<table border="1">
    {section loop = $client_order name = k}
        {if $client_order[k].client_id != $client_order[k].old_user_id || $client_order[k].data_time != $client_order[k].old_user_time}
            <tr>
                <th>№</th>
                <th>Ім'я</th>
                <th>E-mail</th>
                <th>Телефон</th>
                <th>Адресса</th>
                <th>Дата</th>
                <th>Примітка до товару</th>

                <th colspan="2">Управління замовленням</th>

            </tr>
            <tr>
                <td>{$client_order[k].num}</td>
                <td>{$client_order[k].FIO}</td>
                <td>{$client_order[k].email}</td>
                <td>{$client_order[k].phone}</td>
                <td>{$client_order[k].adress}</td>
                <td>{$client_order[k].data_time}</td>
                <td>{$client_order[k].description}</td>

                <td><a href="runOrder.php?id={$client_order[k].client_id}&data={$client_order[k].data_time}&user=client">Виконати</a></td>
                <td><a href="dellOrder.php?id={$client_order[k].client_id}&data={$client_order[k].data_time}&user=client">Видалити</a></td>

            </tr>
            <tr>
                <th>Кол</th>
                <th>Фото</th>
                <th colspan="5">Назва товара</th>
                <th>Ціна</th>
                <th>Вартість</th>
            </tr>
        {/if}
        <tr>
            <td>{$client_order[k].count}</td>
            <td><img width="80px" src="../img/{$client_order[k].photo}"></td>
            <td colspan="5">{$client_order[k].catalog_name}</td>
            <td>{$client_order[k].price}</td>
            <td>{$client_order[k].full_price}</td>
        </tr>

        {if $client_order[k].row_client == $client_order[k].count_client}
            <th colspan="7">Всього до Сплати</th>
            <th colspan="2">{$client_order[k].total_price}</th>
            <tr><th></th></tr>
        {/if}

    {/section}
</table>
{/if}
<h2>Visitors</h2>
{if empty($visitors)}
    <h4>Замовлень не має</h4>
{else}
<table border="1">
    {section loop $visitors name = i}
        {if $visitors[i].visitor_id != $visitors[i].old_visitor_id || $visitors[i].data_time != $visitors[i].old_visitor_time}
            <tr>
                <th>№</th>
                <th>Ім'я</th>
                <th>E-mail</th>
                <th>Телефон</th>
                <th>Адресса</th>
                <th>Дата</th>
                <th>Примітка до товару</th>

                <th colspan="2">Управління замовленням</th>

            </tr>
            <tr>
                <td>{$visitors[i].num}</td>
                <td>{$visitors[i].FIO}</td>
                <td>{$visitors[i].email}</td>
                <td>{$visitors[i].phone}</td>
                <td>{$visitors[i].adress}</td>
                <td>{$visitors[i].data_time}</td>
                <td>{$visitors[i].description}</td>

                <td><a href="runOrder.php?id={$visitors[i].visitor_id}&data={$visitors[i].data_time}&user=visitor">Виконати</a></td>
                <td><a href="dellOrder.php?id={$visitors[i].visitor_id}&user=visitor">Видалити</a></td>

            </tr>
            <tr>
                <th>Кол</th>
                <th>Фото</th>
                <th colspan="5">Назва товара</th>
                <th>Ціна</th>
                <th>Вартість</th>
            </tr>
        {/if}
        <tr>
            <td>{$visitors[i].count}</td>
            <td><img width="80px" src="../img/{$visitors[i].visitor_photo}"></td>
            <td colspan="5">{$visitors[i].catalog_name}</td>
            <td>{$visitors[i].price}</td>
            <td>{$visitors[i].full_price}</td>
        </tr>

        {if $visitors[i].count_visitor == $visitors[i].count_visitor_catalog}
            <th colspan="7">Всього до Сплати</th>
            <th colspan="2">{$visitors[i].total_price}</th>
            <tr><th></th></tr>
        {/if}

    {/section}

</table>
{/if}