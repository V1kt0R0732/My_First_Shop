<form action="dellAdminPhoto.php" method="post">
    <h4>Ви дійсно бажаєте видалити фото профілю:</h4>
    <img scr="images/{$photo}">
    <input type="hidden" name="photo" value="{$photo}">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="submit" name="send" value="Видалити">
</form>