<?php
$pageTitle = "QL: Homepage";     
include("inc/header.php");
?>
<script type="text/javascript" src="scripts/ql_api.js"></script>
<!-- Login screen code here.-->            

<form>
            
    <img src="/img/ql_logo.png" alt="Quake Live Logo" />

    <label for="name">Username:</label>
    <input type="text" id="name" name="user_name">

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
        <a href="/register.php">Not a member? Sign up!</a>
    </div>

</form>


<?php
include("inc/footer.php");
?>
        

