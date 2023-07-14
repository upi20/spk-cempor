<?php

if (!function_exists('plugin_parse')) {
    function plugin_parse($list, $type = 'stylesheet')
    {
        if (!is_array($list)) return '';
        $lists =  array_values(array_unique($list));
        $lists =  array_reverse(array_unique(array_reverse($list)));
        $results = '';
        foreach ($lists as $v) {
            if ($type == 'stylesheet') {
                $results .= ('<link href="' . $v . '" rel="stylesheet">' . PHP_EOL);
            } else  if ($type == 'javascript') {
                $results .= ('<script src="' . $v . '"></script>' . PHP_EOL);
            }
        }
        return $results;
    }
}

if (!function_exists('get_plugins')) {
    function get_plugins($name)
    {
        $plugins = [
            'frontend' => [
                'stylesheets' => [
                    asset('assets/templates/frontend/css/bootstrap.min.css'),
                    // asset('assets/templates/frontend/plugins/revolution/css/settings.css'),
                    // asset('assets/templates/frontend/plugins/revolution/css/layers.css'),
                    // asset('assets/templates/frontend/plugins/revolution/css/navigation.css'),
                    asset('assets/templates/frontend/css/style.css'),
                ],
                'javascripts' => [
                    asset('assets/templates/frontend/js/jquery.js'),
                    // asset('assets/templates/frontend/js/popper.min.js'),

                    // Revolution Slider
                    // asset('assets/templates/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js'),
                    // asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js'),
                    // asset('assets/templates/frontend/js/main-slider-script.js'),
                    // Revolution Slider

                    // asset('assets/templates/frontend/js/bootstrap.min.js'),
                    // asset('assets/templates/frontend/js/jquery.fancybox.js'),
                    // asset('assets/templates/frontend/js/wow.js'),
                    // asset('assets/templates/frontend/js/appear.js'),
                    // asset('assets/templates/frontend/js/select2.min.js'),
                    // asset('assets/templates/frontend/js/owl.js'),
                    asset('assets/templates/frontend/js/script.js'),
                ]
            ],
            'home' => [
                'stylesheets' => [
                    asset('assets/templates/frontend/css/bootstrap.min.css'),
                    asset('assets/templates/frontend/plugins/revolution/css/settings.css'),
                    asset('assets/templates/frontend/plugins/revolution/css/layers.css'),
                    asset('assets/templates/frontend/plugins/revolution/css/navigation.css'),
                    asset('assets/templates/frontend/css/style.css'),
                ],
                'javascripts' => [
                    asset('assets/templates/frontend/js/jquery.js'),
                    asset('assets/templates/frontend/js/popper.min.js'),

                    // Revolution Slider
                    asset('assets/templates/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js'),
                    asset('assets/templates/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js'),
                    asset('assets/templates/frontend/js/main-slider-script.js'),
                    // Revolution Slider

                    asset('assets/templates/frontend/js/bootstrap.min.js'),
                    asset('assets/templates/frontend/js/jquery.fancybox.js'),
                    asset('assets/templates/frontend/js/wow.js'),
                    asset('assets/templates/frontend/js/appear.js'),
                    asset('assets/templates/frontend/js/select2.min.js'),
                    asset('assets/templates/frontend/js/owl.js'),
                    asset('assets/templates/frontend/js/script.js'),
                ]
            ],
            'admin_loader' => [
                'stylesheets' => [
                    asset_admin('css/pace.min.css'),
                ],
                'javascripts' => [
                    asset_admin('js/pace.min.js'),
                ]
            ],
            'login' => [
                'stylesheets' => [
                    asset_admin('plugins/simplebar/css/simplebar.css'),
                    asset_admin('plugins/metismenu/css/metisMenu.min.css'),
                    asset_admin('css/bootstrap.min.css'),
                    asset_admin('css/bootstrap-extended.css'),
                    'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap',
                    asset_admin('css/app.css'),
                    asset_admin('css/icons.css'),
                    asset_admin('css/dark-theme.css'),
                    asset_admin('css/semi-dark.css'),
                    asset_admin('css/header-colors.css'),
                    asset_admin('plugins/fontawesome-free-5.15.4-web/css/all.min.css', name: 'sash')
                ],
                'javascripts' => [
                    asset_admin('js/bootstrap.bundle.min.js'),
                    asset_admin('js/jquery.min.js'),
                    asset_admin('plugins/simplebar/js/simplebar.min.js'),
                    asset_admin('plugins/metismenu/js/metisMenu.min.js'),
                    resource_loader('app.js'),
                    asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash'),
                    asset_admin('js/pace.min.js')
                ]
            ],
            'lazy-load' => [
                'stylesheets' => [],
                'javascripts' => [
                    asset_admin('plugins/jquery.lazy-master/jquery.lazy.min.js', name: 'sash'),
                    resource_loader('pages/frontend/frontend.js'),
                ]
            ],
        ];

        if (isset($plugins[$name])) {
            $plugin = $plugins[$name];
            return [
                'stylesheets' => isset($plugin['stylesheets']) ? $plugin['stylesheets'] : [],
                'javascripts' => isset($plugin['javascripts']) ? $plugin['javascripts'] : [],
            ];
        } else {
            return [
                'stylesheets' => [],
                'javascripts' => [],
            ];
        }
    }
}
