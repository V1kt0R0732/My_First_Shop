<form action="updateUser.php" method="post" enctype="multipart/form-data">
    <h4>Фото Профілю:</h4>
    <img src="images/{$user_photo}" width="90px">
    {if ($user_photo != 'no_profile_photo.png')}
        <br>
        <a href="dellAdminPhoto.php?photo={$user_photo}">Видалити Фото</a>
    {/if}
    <h4>Змінити ім'я</h4>
    <input type="text" name="name" value="{$user_name}">
    <h4>Змінити номер телефону</h4>
    <input type="text" name="phone" value="{$user_phone}">
    <h4>Змінити E-mail</h4>
    <input type="email" name="email" value="{$user_email}">
    <br>
    <h4>Змінити фото</h4>
    <input type="file" name="photo">
    <br>
    <input type="hidden" name="id" value="{$user_id}">
    <h4>Змініть пароль:</h4>
    <a href="password_update.php?id={$user_id}">Click</a>
    <br>
    <br>
    <input type="submit" name="send" value="Прийняти Зміни">
</form>