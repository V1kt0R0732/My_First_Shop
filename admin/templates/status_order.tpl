<table border="1">
    <tr>
        <th>№</th>
        <th>Ім'я</th>
        <th>Електронна адреса</th>
        <th>Телефон</th>
        <th>Адресса</th>
        <th>Фото</th>
        <th>Кол</th>
        <th>Дата</th>
        <th>Ціна</th>
    </tr>
    {section loop = $client_order name = k}
        <tr>
            <td>{$client_order[k].num}</td>
            <td>{$client_order[k].FIO}</td>
            <td>{$client_order[k].email}</td>
            <td>{$client_order[k].phone}</td>
            <td>{$client_order[k].adress}</td>
            <td><img width="80px" src="../img/{$client_order[k].photo}"></td>
            <td>{$client_order[k].count}</td>
            <td>{$client_order[k].data_time}</td>
            <td>{$client_order[k].price}</td>


        </tr>
    {/section}

</table>