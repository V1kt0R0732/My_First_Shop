<table border="2">
    <tr style="">
        <th>№</th>
        <th>Назва</th>
        <th colspan="2">Управління</th>
    </tr>

    {section loop = $masiv name = i}
        <tr>
            <td>{$masiv[i].num}</td>
            <td>{$masiv[i].name}</td>
            <td><a href="dellCategory.php?id={$masiv[i].id}&name={$masiv[i].name}">Видалити</a></td>
            <td><a href="updateCategory.php?id={$masiv[i].id}&name={$masiv[i].name}">Редагувати</a></td>
        </tr>
    {/section}


</table>