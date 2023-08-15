<h2>Welcome <?php if (isset($name)) { echo $name; } ?></h2>
<form action="create" method="post">
    <input type="text" name="name">
    <input type="submit" value="Submit" name="submit">
</form>