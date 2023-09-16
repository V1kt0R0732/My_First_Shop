<form action="updateCatalog.php" method="post" enctype="multipart/form-data">
    <div class="update-form">
    <h5>Ім'я</h5>
    <input type="text" name="catalog" value="{$name}">
    <h5>Висота</h5>
    <input type="text" name="height" value="{$height}">
    <h5>Ширина</h5>
    <input type="text" name="wight" value="{$wight}">
    <h5>Матеріал</h5>
    <input type="text" name="material" value="{$material}">
    <h5>Колір</h5>
    <input type="text" name="color" value="{$color}">
    <h5>Ціна</h5>
    <input type="number" name="price" value="{$price}">
    <h5>Кількість</h5>
    <input type="number" name="colvo" value="{$colvo}">
    <h5>Повний опис</h5>
    <textarea name="fulldescription">{$fulldescription}</textarea>
    <h5>Категорія</h5>
    <select name="category">
        {section loop = $category name = i}
            {if ($category[i].id == $id_cat)}
                <option value="{$category[i].id}" selected>{$category[i].name}</option>
                {else}
                <option value="{$category[i].id}">{$category[i].name}</option>
            {/if}
        {/section}
    </select>
    <h4>Мета Заголовок</h4>
    <textarea name="metaTitle">{$metaTitle}</textarea>
    <h4>Мета ключові слова</h4>
    <textarea name="metaKeyWords">{$metaKeyWords}</textarea>
    <h4>Мета опис</h4>
    <textarea name="metaDiscription">{$metaDiscription}</textarea><br>
    <input type="hidden" name="id" value="{$id}">
    </div>
    <div class="update-photo">
        <h4>Фото:</h4>
        {if (isset($empty_photo))}
            <img src="../img/{$empty_photo}" width="90px">
        {else}
        {section loop = $photos name = k}
            {if ($photos[k].status == 1)}
                <img src="../img/{$photos[k].name_photo}" width="90px"><input type="radio" name="main_photo" value="{$photos[k].id}" checked><b>Головне Фото | <a href="dellPhoto.php?id={$photos[k].id}&name={$photos[k].name_photo}">Видалити Фото</a></b><br>
                {else}
                <img src="../img/{$photos[k].name_photo}" width="90px"><input type="radio" name="main_photo" value="{$photos[k].id}"> Обрати головним | <a href="dellPhoto.php?id={$photos[k].id}&name={$photos[k].name_photo}">Видалити Фото</a><br>
            {/if}
        {/section}
        {/if}
        <h4>Додати Ще Фото</h4>
        <input type="file" name="photo[]" multiple>
    </div>
    <input type="submit" name="send" value="Змінити">
</form>