<form action="dellPhoto.php" method="post">
    {if ($status == 1)}
        <h2>Ви дійсно збираєтесь видалити головне фото?</h2>
        {else}
        <h2>Ви дійсно збираєтеся видалити другорядне фото?</h2>
    {/if}
    <img src="../img/{$photo}" width="100px">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Видалити">
</form>