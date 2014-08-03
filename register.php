
<?php
$pageTitle = "QL: Register";   
include("inc/header.php");
?>


<form action="index.html" method="post">
            
    <h1 class="text-center">Register Here:</h1>

    <label for="name">Username:</label>
    <input type="text" id="name" name="user_name">

    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="user_email">

    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="user_password">

    <div class="row">
        <div class="small-6 columns">
            <button type="submit">Login</button>
        </div>
        <div class="small-6 columns">
            <button type="reset">Reset</button>
        </div>
    </div>

    <div class="row text-center">
        <a href="/index.php">Already a member? Sign in!</a>
    </div>

</form>


<?php
include("inc/footer.php");
?>