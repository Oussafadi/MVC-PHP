<?php if (!empty($_SESSION['error'])) {
    echo "<div  class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']);
}
?>
<div class='login'>
    <form class=forme method="POST" action="">
        <h1>Login</h1>
        <label><b>UserId</b></label><br>
        <input type="text" placeholder="Enter your ID" class="info" name="id"><br>
        <label><b>Password</b></label><br>
        <input type="password" placeholder="Enter your Password" class="info" name="passwrd"><br>
        <input type="submit" value="Login" class="button" name="submit">

    </form>
</div>