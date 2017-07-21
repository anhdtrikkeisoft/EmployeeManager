<h1> Chinh sua </h1>

<form action="updateUser" method="post">
    <input type="hidden" name="id" value="<?php echo $User[0]['id'] ?>">
    <input value="<?php echo $User[0]['name'] ?>" type="text" name="name">
    <input value="<?php echo $User[0]['email'] ?>" type="email" name="email">
    <input type="submit" value="Save">
</form>