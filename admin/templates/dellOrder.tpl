<form action="dellOrder.php" method="post">
    <h3>Ви дійсно хочите видалити користувача на ім'я "{$FIO}"?</h3>
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="user" value="{$user}">
    <input type="hidden" name="data" value="{$data}"
    <br>
    <input type="submit" name="send" value="Видалити">
</form>
