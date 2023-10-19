<h2>Clients</h2>
{if empty($clients)}
    <h4>Замовлень не має</h4>
{else}
    <table border="2">
        {section loop $clients name = k}
            {if $clients[k].change_user_id != $clients[k].id || $clients[k].change_user_data != $clients[k].data_cat}

                <tr>
                    <th>№</th>
                    <th>Ім'я</th>
                    <th>E-mail</th>
                    <th>Телефон</th>
                    <th>Адресса</th>
                    <th>Дата</th>
                    <th>Примітка до товару</th>
                    <th colspan="2">Управління</th>
                </tr>

                <tr>
                    <td>{$clients[k].num}</td>
                    <td>{$clients[k].FIO}</td>
                    <td>{$clients[k].email}</td>
                    <td>{$clients[k].phone}</td>
                    <td>{$clients[k].adress}</td>
                    <td>{$clients[k].data_cat}</td>
                    <td>{$clients[k].description}</td>
                    <td colspan="2"><a href="recovery.php?id={$clients[k].id}&data={$clients[k].data_cat}&user=clients">Повернути</a></td>
                </tr>

                <tr>
                    <th>Кол</th>
                    <th>Фото</th>
                    <th colspan="5">Назва Товара</th>
                    <th>Ціна</th>
                    <th>Вартість</th>
                </tr>
            {/if}


            <tr>
                <td>{$clients[k].count_cat}</td>
                <td><img src="../img/{$clients[k].photo}" width="80px"></td>
                <td colspan="5">{$clients[k].catalog_name}</td>
                <td>{$clients[k].price}</td>
                <td>{$clients[k].full_price}</td>
            </tr>

            {if $clients[k].count_user_cat == $clients[k].count_user_cat_tmp}
                <tr>
                    <th colspan="7">Всього до сплати</th>
                    <th colspan="2">{$clients[k].total_price}</th>
                </tr>
            {/if}
            <tr>
                <td colspan="9"> </td>
            </tr>

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

                    <th colspan="2">Управління</th>

                </tr>
                <tr>
                    <td>{$visitors[i].num}</td>
                    <td>{$visitors[i].FIO}</td>
                    <td>{$visitors[i].email}</td>
                    <td>{$visitors[i].phone}</td>
                    <td>{$visitors[i].adress}</td>
                    <td>{$visitors[i].data_time}</td>
                    <td>{$visitors[i].description}</td>

                    <td colspan="2"><a href="recovery.php?id={$visitors[i].visitor_id}&user=visitor">Повернути</a></td>

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