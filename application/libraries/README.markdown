# codeigniter-notifications

A small but lean Nottifications library for CodeIgniter.

## Usage
- Copy `libraries/Notifications.php` to your applications' `libraries` folder.
- Copy `config/notifications.php` to your applications' `config` folder.
- Tweak `notifications.php` to your liking.
- Load the library. `$this->load->library('notifications');`
- Generate a notification. `$this->notifications->notify('This is a notification.');`
- Display static notifications as HTML. `<?php echo $this->notifications->display_html(); ?>`
- Display dynamic notifications using Javascript. `<?php echo $this->notifications->display_js(); ?>`

The last statement will return using `$javascript_template`, and wrap it in `$javascript_wrap`, i.e.

    <script type=\"text/javascript\">
    /* <![CDATA[ */
        jQuery(document).ready(function(\$) {
            {\$js}
        });
    /* ]]> */
    </script>

Please note that if you want to output notifications more than once on a page, you should pass `false` as a parameter to prevent the notification list from being cleared. For example.

    <?php echo $this->notifications->display_js(); ?>
    
    ... further down the page ...
    <?php $this->notifications->display_html();
    //this will echo nothing, as the notifications have been cleared by the diplay_js() method. ?>

## Changelog

### v1.0
- Initial release