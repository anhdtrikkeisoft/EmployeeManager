<h1> Danh sach User </h1>
<div>
    <a href="createUser"> Create </a>
</div>
<ul>

    <?php
    session_start();
    if (!empty($_SESSION['message'])) {
        $message = $_SESSION['message'];
        echo $message;
        $_SESSION['message'] = "";
    }

    foreach ($Users as $User) { ?>
        <li> Name: <?php echo $User['name']; ?>, Email: <?php echo $User['email']; ?>

            <a class="btn btn-info" href="showUser?id=<?php echo $User['id']; ?>"> Show </a>
            <a class="btn btn-primary" href="editUser?id=<?php echo $User['id']; ?>"> Edit </a>

            <form method="POST" action="deleteUser" accept-charset="UTF-8"
                  style="display:inline">
                <input name="_method" type="hidden" value="DELETE">
                <input type="hidden" name="id" value="<?php echo $User['id']; ?>">
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>

        </li>
        <?php
    }
    ?>

</ul>
<?php
?>