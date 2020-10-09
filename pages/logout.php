<?php
session_start(); //session is started
session_unset(); //session is unset
session_destroy();//session is destroyed
header("Location:login"); //redirected to login page
?>