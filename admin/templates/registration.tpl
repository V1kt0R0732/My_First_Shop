<form action="registration.php" method="post" enctype="multipart/form-data">
    <h4>Ім'я</h4>
    <input type="text" name="name" placeholder="Ваше Ім'я" maxlength="25">
    <h4>E-mail</h4>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h4>Номер телефону</h4>
    <input type="text" name="phone" placeholder="Ваш номер телефону">
    <h4>Пароль</h4>
    <input type="password" name="password">
    <h4>Повторіть пароль</h4>
    <input type="password" name="re_password">
    <h4>Роль</h4>
    <select name="role">
        <option value="0">Оберіть Роль</option>
        <option value="2" selected>Оператор</option>
        <option value="1">Головний Адміністратор</option>
    </select>
    <h4>Оберіть Фото</h4>
    <input type="file" name="photo"><br><br>
    <input type="submit" name="send" value="Зареєструвати">


</form>