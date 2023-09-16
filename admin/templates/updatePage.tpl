<form method="post" action="updatePage.php">
    <h4>Meta Title</h4>
    <textarea name="metaTitle">{$metaTitle}</textarea>
    <h4>Meta Discription</h4>
    <textarea name="metaDiscription">{$metaDiscription}</textarea>
    <h4>Meta Key Words</h4>
    <textarea name="metaKeyWords">{$metaKeyWords}</textarea>
    <h4>Title</h4>
    <input type="text" name="title" value="{$title}">
    <h4>Full Content</h4>
    <textarea name="fullContent">{$fullContent}</textarea>
    <h4>Name</h4>
    <input type="text" name="name" value="{$name}">
    <h4>Page</h4>
    <input type="text" name="page" value="{$page}">
    <select name="prior">
        {for $i = 1; $i <= $count_prior; $i++}
            {if ($i == $main_prior)}
                <option value="{$i}" selected>{$i}</option>
                {else}
                <option value="{$i}" >{$i}</option>
            {/if}
        {/for}
    </select>
    <input type="hidden" name="old_prior" value="{$main_prior}">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Змінити">
</form>