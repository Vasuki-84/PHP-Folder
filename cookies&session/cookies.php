<?php

// Cookies :
// A cookie is small data stored in the user’s browser.

// 1. Stored on client side (browser) - less secure , Size limit (~4KB), User can modify it
// 2. Has expiry time
// 3. Used for: remembering user preferences, login (basic), etc.

setcookie("user", "Mithra", time() + 3600);  // * setcookie() must be BEFORE any output
echo "Hello";
 // user- cookie name, Mithra- value, time()+3600- expires in 1 hour, / available in entire website

if(isset($_COOKIE['user'])){
    echo "Welcome " . $_COOKIE['user'];
} else {
    echo "Cookie not set";
}

?>