<?php
/**
 * Plugin Name: TP Customize Admin Screen
 * Plugin URL: https://coisubin.com
 * Version: 1.0
 * Description: Tùy biến lại trang quản trị của WordPress.
 * Author Name: Dao Duy Phuong
 * Created At: 29/08/2022
 */

//  Hàm thay đổi Logo
function tp_custom_logo() { ?>
    <style type="text/css">
        body {
            background-color: #000 !important;
        }

        .login h1 a {
            background-image: url( <?= plugins_url('images/logo.jpg', __FILE__ ); ?> ) !important;
            width: 120px !important;
            height: 100px !important;
            background-size: 120px 100px !important;
        }
    </style>
<?php 
}

add_action( 'login_enqueue_scripts', 'tp_custom_logo' );
