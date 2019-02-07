<h2>User Baru</h2>
<form method="POST" action="<?php echo site_url() ?>/user/insert_user_baru" >
    <p>Username : <input type="text" name="username" required="true"> </p>
    <p>Password : <input type="password" name="password" required="true"></p>
    <p>Full Name : <input type="text" name="fullname" required="true"></p>
    <input type="submit" value="Insert !" />
</form>

<h2>Daftar Akun</h2>
<table border="1" padding="0" >
    <thead>
        <tr>
            <td>No</td>
            <td>Username</td>
            <td>Fullname</td>
        </tr>
    </thead> 
    <?php
    $num = 0;
    foreach ($all_user as $user) {
    ?>
        <tr>
            <td><?php echo $num++; ?></td>
            <td><?php echo $user->username ?></td>
            <td><?php echo $user->fullname ?></td>
        </tr>        
    <?php } ?>
</table>
