<?php
function login()
{
    if (!isset($user_role)) {
        redirect('login');
    }
}
?>