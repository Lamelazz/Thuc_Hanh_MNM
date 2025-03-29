<?php
// Chặn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit;
}

// Thêm menu cài đặt vào WordPress Admin
function qcb_add_admin_menu() {
    add_options_page(
        'Quick Chat Button Settings',
        'Quick Chat Button',
        'manage_options',
        'qcb_settings',
        'qcb_settings_page'
    );
}
add_action('admin_menu', 'qcb_add_admin_menu');

// Đăng ký cài đặt
function qcb_register_settings() {
    register_setting('qcb_settings_group', 'qcb_messenger_enabled');
    register_setting('qcb_settings_group', 'qcb_zalo_enabled');
    register_setting('qcb_settings_group', 'qcb_messenger_link');
    register_setting('qcb_settings_group', 'qcb_zalo_phone');
    register_setting('qcb_settings_group', 'qcb_chat_text');
}
add_action('admin_init', 'qcb_register_settings');

// Trang cài đặt
function qcb_settings_page() {
    ?>
    <div class="wrap">
        <h1>Quick Chat Button Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('qcb_settings_group'); ?>
            <?php do_settings_sections('qcb_settings_group'); ?>
            <table class="form-table">
                <tr>
                    <th scope="row">Bật Messenger</th>
                    <td><input type="checkbox" name="qcb_messenger_enabled" value="1" <?php checked(1, get_option('qcb_messenger_enabled', 1)); ?>></td>
                </tr>
                <tr>
                    <th scope="row">Liên kết Messenger</th>
                    <td><input type="text" name="qcb_messenger_link" value="<?php echo esc_attr(get_option('qcb_messenger_link', '#')); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">Bật Zalo</th>
                    <td><input type="checkbox" name="qcb_zalo_enabled" value="1" <?php checked(1, get_option('qcb_zalo_enabled', 1)); ?>></td>
                </tr>
                <tr>
                    <th scope="row">Số điện thoại Zalo</th>
                    <td><input type="text" name="qcb_zalo_phone" value="<?php echo esc_attr(get_option('qcb_zalo_phone', '')); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">Nội dung nút chat</th>
                    <td><input type="text" name="qcb_chat_text" value="<?php echo esc_attr(get_option('qcb_chat_text', 'Chat ngay')); ?>" class="regular-text"></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
