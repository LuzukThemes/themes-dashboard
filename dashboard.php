<?php
add_action('admin_menu', 'luzuk_theme_dashboard_menu');

function luzuk_theme_dashboard_menu() {
    add_theme_page(
        'Themes Dashboard',
        'Themes Dashboard',
        'manage_options',
        'luzuk-theme-dashboard',
        'luzuk_theme_dashboard_page'
    );
}

function luzuk_theme_dashboard_page() {
    $theme = wp_get_theme();
    $theme_name = $theme->get('Name');
    $theme_screenshot = $theme->get_screenshot(); // Path to screenshot.png
    $theme_description = $theme->get('Description');
    $theme_version = $theme->get('Version');
    ?>

    <div class="wrap">
        <h1>Themes Dashboard</h1>
        <div style="display: flex; gap: 30px; margin-top: 20px;">

            <!-- LEFT: Active Theme Info -->
            <div style="flex: 1; background: #fff; padding: 20px; box-shadow: 0 0 10px #ccc;">
                <?php if ($theme_screenshot): ?>
                    <img src="<?php echo esc_url($theme_screenshot); ?>" alt="<?php echo esc_attr($theme_name); ?>" style="max-width: 100%;">
                <?php endif; ?>
                <h2><?php echo esc_html($theme_name); ?></h2>
                <p><strong>Version:</strong> <?php echo esc_html($theme_version); ?></p>
                <p><?php echo esc_html($theme_description); ?></p>
                <a href="#" class="button button-primary">Buy Premium</a>
                <a href="#" class="button button-secondary">Live Demo</a>
                <a href="#" class="button" style="background-color:#e754a3; color: white;">Theme Bundle</a>
            </div>

            <!-- RIGHT: Theme Bundle (Static) -->
            <div style="flex: 1; background: #fff; padding: 20px; box-shadow: 0 0 10px #ccc;">
                <img src="https://luzuk.com/wp-content/uploads/2024/02/theme-bundle.jpg" style="max-width: 100%;" alt="Theme Bundle">
                <h2>Theme Bundle</h2>
                <p style="color: red;">Get access to all 129+ premium themes in one package.</p>
                <ul style="list-style: none; padding-left: 0;">
                    <li>✅ Unlimited Domain Usage</li>
                    <li>✅ One Click Installation</li>
                    <li>✅ Support for 1 Year</li>
                    <li>✅ Options Panel</li>
                    <li>✅ Secured & Optimized Code</li>
                    <li>✅ All Categories Theme</li>
                    <li>✅ Demo Data Include</li>
                    <li>✅ Free Installation</li>
                </ul>
                <a href="#" class="button button-primary" style="background-color:#8000ff; color:white;">Get Theme Bundle</a>
            </div>

        </div>
    </div>

    <?php
}
