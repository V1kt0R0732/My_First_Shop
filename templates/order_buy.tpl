<table border="2" style="">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>Кількість</th>
        <th>Вартість</th>
    </tr>
    {section loop = $basket name = k}
    <tr>
        <td>{$basket[k].num}</td>
        <td><img width = 80px src="img/{$basket[k].photo}"></td>
        <td>{$basket[k].name}</td>
        <td>{$basket[k].price}</td>
        <td>{$basket[k].count}</td>
        <td>{$basket[k].sum}</td>
    </tr>
    {/section}
</table>
{if isset($user_id, $user_FIO, $user_email, $user_phone, $user_adress)}
    <h3>Ви успішно Авторизовані</h3>
    <h4>Змінити дані за потреби:</h4>
    <form action="order_buy.php" method="post">
        <h5>Email:</h5>
        <input type="email" name="email" value="{$user_email}">
        <h5>Phone Number:</h5>
        <input type="text" name="phone" value="{$user_phone}">
        <h5>ФІО:</h5>
        <input type="text" name="login" value="{$user_FIO}">
        <h5>Адрес доставки:</h5>
        <input type="texr" name="adress" value="{$user_adress}">
        <h5>Примітка до замовлення:</h5>
        <textarea name="disc" placeholder="Нотаток"></textarea>
        <br>
        <input type="hidden" name="tmp" value="1">
        <input type="hidden" name="user_id" value="{$user_id}">
        <input type="submit" name="send" value="Замовити">
    </form>

    {else}

    <h4><a href="registration.php">Зареєструйтесь</a> або <a href="login.php">Увійдіть</a><br> або офоміть, як гість:</h4>
    <h3>Оформити як гість: </h3>

    <form action="order_buy.php" method="post">
        <h5>Email:</h5>
        <input type="email" name="email" placeholder="Example@gmail.com">
        <h5>Phone Number:</h5>
        <input type="text" name="phone" placeholder="063 xxx xx xx">
        <h5>ФІО:</h5>
        <input type="text" name="login" placeholder="ФІО">
        <h5>Адрес доставки:</h5>
        <input type="texr" name="adress" placeholder="Адрес доставки">
        <h5>Примітка до замовлення:</h5>
        <textarea name="disc" placeholder="Нотаток"></textarea>
        <br>
        <input type="hidden" name="tmp" value="2">
        <input type="submit" name="send" value="Відправити">
    </form>
{/if}

