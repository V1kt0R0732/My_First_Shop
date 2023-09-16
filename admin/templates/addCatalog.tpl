<form method="post" action="addCatalog.php" enctype="multipart/form-data">
    <div class="catalog" style="width: 300px">
    <h4>Назва Товару</h4>
    <input type="text" name="catalog" placeholder="Назва товару"><br>
    <h4>Категорія</h4>
    <select name="category">
        <option value="0">Оберіть Категорію</option>
        {section loop = $category name = i}
            <option value="{$category[i].id}">{$category[i].category_name}</option>
        {/section}
    </select><br>
    <h4>Висота (см.)</h4>
    <input type="number" name="height" placeholder="Висота в см."><br>
    <h4>Ширина (см.)</h4>
    <input type="number" name="wight" placeholder="Ширина в см."><br>
    <h4>Матеріал</h4>
    <input type="text" name="material" placeholder="Матеріал"><br>
    <h4>Колір</h4>
    <input type="text" name="color" placeholder="Колір"><br>
    <h4>Ціна в грн.</h4>
    <input type="number" name="price" placeholder="Ціна в грн."><br>
    <h4>Кількість в наявності</h4>
    <input type="number" name="count" placeholder="Кіл-ть в наявності"><br>
    <h4>Опис Товару</h4>
    <textarea name="description" placeholder="Опис товару"></textarea><br>
    </div>
    <div class="CEO" style="width: 300px">

    <h3>Поля для CEO-оптимізації</h3>
    <h4>Meta Title</h4>
    <textarea name="metaTitle" placeholder="Meta_Title"></textarea>
    <h4>MetaKeyWords</h4>
    <textarea name="metaKeyWords" placeholder="Meta_Key_Words"></textarea>
    <h4>MetaDiscription</h4>
    <textarea name="metaDiscription" placeholder="Meta_Description"></textarea><br>

    <h4>Виберіть 1 або більше фото</h4>
    <input type="file" name="photo[]" multiple>
    <input type="submit" name="send" value="Додати">
    </div>
</form>
