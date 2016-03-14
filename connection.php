
<?php
include 'header.php';
include 'footer.php';

?>
<div id="registration">
       <span>
           <p id="title">Sign Up</p>
       </span>
    <form action="connection.php" method="post">
        <ul>
            <li>
                <label for="firstName">First name</label>
                <br>
                <input type="text" name="firstName">
            </li>
            <li>
                <label for="lastName"> Last name</label>
                <br>
                <input type="text" name="lastName">
            </li>
            <li>
                <label for="email">Email</label>
                <br>
                <input type="text" name="email">
            </li>
            <li>
                <label for="password">Password (6 or more characters)</label>
                <br>
                <input type="password" name="password">
            </li>
        </ul>

        <p id="agreement">By clicking Sign up, you agree to
            <a href="">User Agreement</a>,<br>
            <a href="">Privacy Policy</a> and
            <a href="">Cookie Policy</a>.
        </p>
        <button type="submit" value="Sign Up">Sign Up</button>
    </form>



</div>

<?php
if($_POST) {
    $email = trim($_POST['email']);
    if($mb_strlen($email) < 3) {
        echo  '<p>Enter more than 3 charaktersS</p>';
    }
    $password = trim($_POST['password']);
    if(mb_strlen($password) < 6) {
        echo  '<p>Enter more than 6 characters"</p>';
    }
    $email_esc = mysqli_real_escape_string($db,$email);
    $q1 = mysqli_query($db, 'SELECT * FROM users WHERE
email =' . " . mysqli_real_escape_string($db,$email) . " );

    $q2 = mysqli_query($db, 'SELECT * FROM users WHERE
email =  $email_esc' );
}
if(mysqli_num_rows($q) > 0) {
    echo 'This email is already exist';

} else {
    mysqli_query( $db, 'INSERT INTO users(email) VALUES($email_esc)');

}
?>


