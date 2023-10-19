    <h3>Clients</h3>
<table border="2">
    <tr>
        <th>FIO</th>
        <th>Count</th>
    </tr>
    {section loop = $client name = k}
        <tr>
            <td>{$client[k].FIO}</td>
            <td>{$client[k].count}</td>
        </tr>
    {/section}
</table>

    <h3>Clear Clients</h3>
<table border="2">
    <tr>
        <th>FIO</th>
        <th>Count</th>
    </tr>
    {section loop = $clear_client name = x}
        <tr>
            <td>{$clear_client[x].num}</td>
            <td>{$clear_client[x].FIO}</td>
        </tr>
    {/section}
</table>
    <h3>Visitors</h3>
<table border="2">
    <tr>
        <th>FIO</th>
        <th>Count</th>
    </tr>
    {section loop = $visitor name = i}
        <tr>
            <td>{$visitor[i].FIO}</td>
            <td>{$visitor[i].count}</td>
        </tr>
    {/section}
</table>
