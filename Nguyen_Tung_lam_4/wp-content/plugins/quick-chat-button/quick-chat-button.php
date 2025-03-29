<?php
/**
 * Plugin Name: Quick Chat Button
 * Description: Hỗ trợ chat nhanh với Messenger và Zalo trên website.
 * Version: 1.0
 * Author: Nguyễn Tùng Lâm
 */

// Chặn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit;
}

// Thêm menu cài đặt
require_once plugin_dir_path(__FILE__) . 'admin-settings.php';

// Thêm CSS & JS
function qcb_enqueue_scripts() {
    wp_enqueue_style('qcb-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('qcb-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'qcb_enqueue_scripts');

// Hiển thị nút chat
function qcb_display_chat_button() {
    $chat_text = esc_html(get_option('qcb_chat_text', 'Chat ngay'));
    
    echo '<div class="qcb-chat-buttons">';
        // Nút Messenger
    echo '<a href="https://www.facebook.com/nguyen.lam.26124" class="qcb-messenger" target="_blank"> 
    <span class="qcb-icon fb-icon"><i class="fa-brands fa-facebook-messenger"></i></span> 
    <span class="qcb-text">Chat với Facebook</span>
  </a>';

// Nút Zalo
echo '<a href="https://chat.zalo.me/" class="qcb-zalo" target="_blank"> 
    <span class="qcb-icon zalo-icon"><i class="fa-solid fa-comments"></i></span> 
    <span class="qcb-text">Chat với Zalo</span>
  </a>';
    echo '</div>';
}
add_action('wp_footer', 'qcb_display_chat_button');
