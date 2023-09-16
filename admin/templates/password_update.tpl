<form action="password_update.php" method="post">
    <h4>Введіть теперішній пароль</h4>
    <input type="password" name="password">
    <h4>Введіть новий пароль</h4>
    <input type="password" name="new_password">
    <h4>Повторіть новий пароль</h4>
    <input type="password" name="re_new_password">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Змінити">
</form>