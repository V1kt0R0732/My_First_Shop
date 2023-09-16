<table border="2" >
    <tr>
        <th>№</th>
        <th>Заголовок</th>
        <th>Управління</th>
    </tr>
    {section loop = $page name = k}
        <tr>
            <td>{$page[k].num}</td>
            <td>{$page[k].title}</td>
            <td><a href="updatePage.php?id={$page[k].id}">Редагувати</a></td>
        </tr>
    {/section}

</table>