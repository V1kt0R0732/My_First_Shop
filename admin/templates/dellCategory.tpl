
{if (isset($id) && !empty($id))}
<form action="dellCategory.php" method="post">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Видалити">
</form>
{elseif (isset($count, $id_cat) && !empty($count) && !empty($id_cat))}
    <h4>Категорію неможливо видалити. Кількість товарів в категорії: {$count}</h4>
    Перейти до товарів даной категорії: <a href="indexCatalog.php?category={$id_cat}">Click</a>


{/if}