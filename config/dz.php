<?php

return [
    "name" => "Zenix",
    "site_level" => [
        "site_title" => "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
        "favicon" => "images/favicon.png",
        "seo" => [
            "meta" => [
                [
                    "name" => "keywords",
                    "content" =>
                        "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                ],
                ["name" => "author", "content" => "DexignZone"],
                ["name" => "robots", "content" => "index, follow"],
                [
                    "name" => "viewport",
                    "content" =>
                        "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                ],
                [
                    "name" => "description",
                    "content" =>
                        "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                ],
                [
                    "property" => "og:title",
                    "content" =>
                        "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                ],
                [
                    "property" => "og:description",
                    "content" =>
                        "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                ],
                [
                    "property" => "og:image",
                    "content" =>
                        "https://zenix.dexignzone.com/xhtml/social-image.png",
                ],
                ["name" => "format-detection", "content" => "telephone=no"],
                [
                    "name" => "twitter:title",
                    "content" =>
                        "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                ],
                [
                    "name" => "twitter:description",
                    "content" =>
                        "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                ],
                [
                    "name" => "twitter:image",
                    "content" =>
                        "https://zenix.dexignzone.com/xhtml/social-image.png",
                ],
                ["name" => "twitter:card", "content" => "summary_large_image"],
            ],
        ],
    ],
    "global" => [
        "css" => [
            "top" => [
                "vendor/bootstrap-select/dist/css/bootstrap-select.min.css",
            ],
            "bottom" => ["css/style.css"],
        ],
        "js" => [
            "top" => [
                "vendor/global/global.min.js",
                "vendor/bootstrap-select/dist/js/bootstrap-select.min.js",
            ],
            "bottom" => [
                "js/deznav-init.js",
            ],
        ],
    ],
    "pagelevel" => [
        "ZenixController_app_calender" => [
            
            "css" => [
                "vendor/fullcalendar/css/main.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/moment/moment.min.js",
                "vendor/fullcalendar/js/main.min.js",
                "js/plugins-init/fullcalendar-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_app_profile" => [
            
            "css" => [
                "vendor/lightgallery/css/lightgallery.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/lightgallery/js/lightgallery-all.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_coin_details" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/bootstrap-daterangepicker/daterangepicker.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/apexchart/apexchart.js",
                "js/dashboard/coin-details.js",
                "vendor/moment/moment.min.js",
                "vendor/bootstrap-daterangepicker/daterangepicker.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_contact_card" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/owl-carousel/owl.carousel.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/peity/jquery.peity.min.js",
                "vendor/apexchart/apexchart.js",
                "js/dashboard/contact.js",
                "vendor/owl-carousel/owl.carousel.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_contact_list" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/datatables/js/jquery.dataTables.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ecom_checkout" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ecom_customers" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/highlightjs/highlight.pack.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ecom_invoice" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ecom_product_detail" => [
            
            "css" => [
                "vendor/star-rating/star-rating-svg.css",

                "vendor/owl-carousel/owl.carousel.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/star-rating/jquery.star-rating-svg.js",
                "vendor/owl-carousel/owl.carousel.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ecom_product_grid" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ecom_product_list" => [
            
            "css" => [
                "vendor/star-rating/star-rating-svg.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/star-rating/jquery.star-rating-svg.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ecom_product_order" => [
            
            "css" => [
                "css/jquery.localizationTool.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_email_compose" => [
            
            "css" => [
                "vendor/dropzone/dist/dropzone.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/dropzone/dist/dropzone.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_email_inbox" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_email_read" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_index_2" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/owl-carousel/owl.carousel.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/peity/jquery.peity.min.js",
                "vendor/apexchart/apexchart.js",
                "js/dashboard/dashboard-1.js",
                "vendor/owl-carousel/owl.carousel.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_index" => [
            
            "css" => [
                "https://fonts.googleapis.com/css2?family=Material+Icons",
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/chartist/css/chartist.min.css",
                "vendor/owl-carousel/owl.carousel.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/peity/jquery.peity.min.js",
                "vendor/apexchart/apexchart.js",
                "js/dashboard/dashboard-1.js",
                "vendor/owl-carousel/owl.carousel.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_market_capital" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/peity/jquery.peity.min.js",
                "vendor/apexchart/apexchart.js",
                "vendor/datatables/js/jquery.dataTables.min.js",
                "js/plugins-init/datatables.init.js",
                "js/dashboard/market-capital.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_my_wallets" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/owl-carousel/owl.carousel.css",
                "vendor/swiper/css/swiper-bundle.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/peity/jquery.peity.min.js",
                "vendor/apexchart/apexchart.js",
                "js/dashboard/my-wallet.js",
                "vendor/owl-carousel/owl.carousel.js",
                "vendor/swiper/js/swiper-bundle.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_chat" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/owl-carousel/owl.carousel.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/peity/jquery.peity.min.js",
                "vendor/apexchart/apexchart.js",
                "js/dashboard/chat.js",
                "vendor/owl-carousel/owl.carousel.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_empty" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/owl-carousel/owl.carousel.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_error_400" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_error_403" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_error_404" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_error_500" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_error_503" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_forgot_password" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_lock_screen" => [
            
            "css" => [
                "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/deznav/deznav.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_login" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_page_register" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_portfolio" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/apexchart/apexchart.js",
                "js/dashboard/portfolio.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_post_details" => [
            
            "css" => [
                "vendor/lightgallery/css/lightgallery.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/lightgallery/js/lightgallery-all.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_project_card" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_project_list" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_tranasactions" => [
            
            "css" => [
                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_user_list_column" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/datatables/js/jquery.dataTables.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_user_list_datatable" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/datatables/js/jquery.dataTables.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_widget_basic" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/apexchart/apexchart.js",
                "vendor/chartist/js/chartist.min.js",
                "vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js",
                "vendor/flot/jquery.flot.js",
                "vendor/flot/jquery.flot.pie.js",
                "vendor/flot/jquery.flot.resize.js",
                "vendor/flot-spline/jquery.flot.spline.min.js",
                "vendor/jquery-sparkline/jquery.sparkline.min.js",
                "js/plugins-init/sparkline-init.js",
                "vendor/peity/jquery.peity.min.js",
                "js/plugins-init/piety-init.js",
                "js/plugins-init/widgets-script-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_activity" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/apexchart/apexchart.js",
                "vendor/draggable/draggable.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_api_keys" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_billing" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_logs" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_overview" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_referrals" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_security" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/owl-carousel/owl.carousel.css",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/owl-carousel/owl.carousel.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_settings" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_statements" => [
            
            "mainwrapperclass" => "show",
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_auto_write" => [
            
            "css" => [
                "https://fonts.googleapis.com/css2?family=Material+Icons",
            ],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_chatbot" => [
            
            "css" => [
                "https://fonts.googleapis.com/css2?family=Material+Icons",
                "vendor/nouislider/nouislider.min.css",

                "vendor/clockpicker/css/bootstrap-clockpicker.min.css",
                "vendor/jquery-asColorPicker/css/asColorPicker.min.css",
                "css/jquery.localizationTool.css",
                "vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css",
            ],
            "js" => [
                "vendor/nouislider/nouislider.min.js",
                "vendor/wnumb/wNumb.js",

                "vendor/jquery-asColor/jquery-asColor.min.js",
                "vendor/jquery-asGradient/jquery-asGradient.min.js",
                "vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js",
                "js/plugins-init/jquery-asColorPicker.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_fine_tune_models" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "https://fonts.googleapis.com/css2?family=Material+Icons",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_import" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
                "css/jquery.localizationTool.css",
                "vendor/dropzone/dist/dropzone.css",
                "https://fonts.googleapis.com/css2?family=Material+Icons",
            ],
            "js" => [
                "vendor/dropzone/dist/dropzone.js",

                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_prompt" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
                "css/jquery.localizationTool.css",
                "https://fonts.googleapis.com/css2?family=Material+Icons",
                "vendor/nouislider/nouislider.min.css",
            ],
            "js" => [
                "vendor/nouislider/nouislider.min.js",
                "vendor/wnumb/wNumb.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_repurpose" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "https://fonts.googleapis.com/css2?family=Material+Icons",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_rss" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "https://fonts.googleapis.com/css2?family=Material+Icons",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_scheduled" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/swiper/css/swiper-bundle.min.css",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css",
                "vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css",
                "vendor/tagify/dist/tagify.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",

                "vendor/apexchart/apexchart.js",
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_setting" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
                "https://fonts.googleapis.com/css2?family=Material+Icons",
                "vendor/nouislider/nouislider.min.css",

                "vendor/clockpicker/css/bootstrap-clockpicker.min.css",
                "vendor/jquery-asColorPicker/css/asColorPicker.min.css",
                "vendor/tagify/dist/tagify.css",
                "css/jquery.localizationTool.css",
                "vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css",
            ],
            "js" => [
                "vendor/nouislider/nouislider.min.js",
                "vendor/wnumb/wNumb.js",

                "vendor/jquery-asColor/jquery-asColor.min.js",
                "vendor/jquery-asGradient/jquery-asGradient.min.js",
                "vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js",
                "js/plugins-init/jquery-asColorPicker.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_chartist" => [
            
            "css" => [
                "vendor/chartist/css/chartist.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/chartist/js/chartist.min.js",
                "vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js",
                "js/plugins-init/chartist-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_chartjs" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/chart.js/Chart.bundle.min.js",
                "js/plugins-init/chartjs-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_flot" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/flot/jquery.flot.js",
                "vendor/flot/jquery.flot.pie.js",
                "vendor/flot/jquery.flot.resize.js",
                "vendor/flot-spline/jquery.flot.spline.min.js",
                "js/plugins-init/flot-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_morris" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/raphael/raphael.min.js",
                "vendor/morris/morris.min.js",
                "js/plugins-init/morris-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_peity" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/peity/jquery.peity.min.js",
                "js/plugins-init/piety-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_sparkline" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/chart.js/Chart.bundle.min.js",
                "vendor/jquery-sparkline/jquery.sparkline.min.js",
                "js/plugins-init/sparkline-init.js",
                "vendor/svganimation/vivus.min.js",
                "vendor/svganimation/svg.animation.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_add_blog" => [
            
            "css" => [
                "vendor/select2/css/select2.min.css",

                "css/jquery.localizationTool.css",

                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
            ],
            "js" => [
                "vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js",
                "vendor/ckeditor/ckeditor.js",
                "vendor/select2/js/select2.full.min.js",
                "js/plugins-init/select2-init.js",
                "js/dashboard/cms.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.min.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_add_email" => [
            
            "css" => [
                "vendor/select2/css/select2.min.css",

                "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js",
                "vendor/ckeditor/ckeditor.js",
                "vendor/select2/js/select2.full.min.js",
                "js/plugins-init/select2-init.js",
                "js/dashboard/cms.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.min.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_blog_category" => [
            
            "css" => [
                "vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css",

                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js",
                "js/dashboard/cms.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.min.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_blog" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js",
                "js/dashboard/cms.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_content_add" => [
            
            "css" => [
                "vendor/select2/css/select2.min.css",

                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js",
                "vendor/ckeditor/ckeditor.js",
                "vendor/select2/js/select2.full.min.js",
                "js/plugins-init/select2-init.js",
                "js/dashboard/cms.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.min.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_content" => [
            
            "css" => [
                "vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",

                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
            ],
            "js" => [
                "vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js",
                "js/dashboard/cms.js",
                "vendor/ckeditor/ckeditor.js",
                "vendor/datatables/js/jquery.dataTables.min.js",

                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.min.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_email_template" => [
            
            "css" => [
                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",

                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
            ],
            "js" => [
                "vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js",
                "js/dashboard/cms.js",
                "vendor/ckeditor/ckeditor.js",
                "vendor/datatables/js/jquery.dataTables.min.js",

                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.min.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_menu" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/datatables/css/jquery.dataTables.min.css",
                "vendor/nestable2/css/jquery.nestable.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "js/dashboard/cms.js",
                "vendor/nestable2/js/jquery.nestable.min.js",
                "js/plugins-init/nestable-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_accordion" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_alert" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_badge" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_breadcrumb" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_button_group" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_button" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_card" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_carousel" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_colors" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_dropdown" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_grid" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
       "ZenixController_ui_list_group" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_media_object" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_modal" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_navbar" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_object_fit" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_offcanvas" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_pagination" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_placeholders" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_popover" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_progressbar" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_range_slider" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_scrollspy" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_spinners" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_tab" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_toasts" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_ui_typography" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_form_editor_summernote" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/ckeditor/ckeditor.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_form_element" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_form_pickers" => [
            
            "css" => [
                "vendor/bootstrap-daterangepicker/daterangepicker.css",
                "vendor/clockpicker/css/bootstrap-clockpicker.min.css",
                "vendor/jquery-asColorPicker/css/asColorPicker.min.css",
                "vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css",
                "vendor/pickadate/themes/default.css",
                "vendor/pickadate/themes/default.date.css",
                "https://fonts.googleapis.com/icon?family=Material+Icons",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/moment/moment.min.js",
                "vendor/bootstrap-daterangepicker/daterangepicker.js",
                "vendor/clockpicker/js/bootstrap-clockpicker.min.js",
                "vendor/jquery-asColor/jquery-asColor.min.js",
                "vendor/jquery-asGradient/jquery-asGradient.min.js",
                "vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js",
                "vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js",
                "vendor/pickadate/picker.js",
                "vendor/pickadate/picker.time.js",
                "vendor/pickadate/picker.date.js",
                "js/plugins-init/bs-daterange-picker-init.js",
                "js/plugins-init/clock-picker-init.js",
                "js/plugins-init/jquery-asColorPicker.init.js",
                "js/plugins-init/material-date-picker-init.js",
                "js/plugins-init/pickadate-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_form_validation_jquery" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "vendor/jquery-validation/jquery.validate.min.js",
                "js/plugins-init/jquery.validate-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_form_wizard" => [
            
            "css" => [
                "vendor/jquery-smartwizard/dist/css/smart_wizard.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/jquery-steps/build/jquery.steps.min.js",
                "vendor/jquery-validation/jquery.validate.min.js",
                "js/plugins-init/jquery.validate-init.js",
                "vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_lightgallery" => [
            
            "css" => [
                "vendor/lightgallery/css/lightgallery.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/lightgallery/js/lightgallery-all.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_map_jqvmap" => [
            
            "css" => [
                "vendor/jqvmap/css/jqvmap.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/jqvmap/js/jquery.vmap.min.js",
                "vendor/jqvmap/js/jquery.vmap.world.js",
                "vendor/jqvmap/js/jquery.vmap.usa.js",
                "js/plugins-init/jqvmap-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_nestable" => [
            
            "css" => [
                "vendor/nestable2/css/jquery.nestable.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/nestable2/js/jquery.nestable.min.js",
                "js/plugins-init/nestable-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_noui_slider" => [
            
            "css" => [
                "vendor/nouislider/nouislider.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/nouislider/nouislider.min.js",
                "vendor/wnumb/wNumb.js",
                "js/plugins-init/nouislider-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_select2" => [
            
            "css" => [
                "vendor/select2/css/select2.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/select2/js/select2.full.min.js",
                "js/plugins-init/select2-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_sweetalert" => [
            
            "css" => [
                "vendor/sweetalert2/dist/sweetalert2.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/sweetalert2/dist/sweetalert2.min.js",
                "js/plugins-init/sweetalert.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_toastr" => [
            
            "css" => [
                "vendor/toastr/css/toastr.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/toastr/js/toastr.min.js",
                "js/plugins-init/toastr-init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_activity_profile" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/draggable/draggable.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_campaigns" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_documents" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_followers" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_overview_profile" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",
                "vendor/lightgallery/css/lightgallery.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/apexchart/apexchart.js",
                "vendor/draggable/draggable.js",
                "vendor/lightgallery/js/lightgallery-all.min.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_projects_details" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "vendor/owl-carousel/owl.carousel.css",
                "vendor/datatables/css/jquery.dataTables.min.css",
                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "vendor/datatables/js/dataTables.buttons.min.js",
                "vendor/datatables/js/buttons.html5.min.js",
                "vendor/datatables/js/jszip.min.js",
                "vendor/owl-carousel/owl.carousel.js",
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_projects" => [
            
            "css" => [
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/apexchart/apexchart.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",

                "js/dashboard/profile.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_bootstrap_basic" => [
            
            "css" => ["css/jquery.localizationTool.css"],
            "js" => [
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
        "ZenixController_datatable_basic" => [
            
            "css" => [
                "vendor/datatables/css/jquery.dataTables.min.css",

                "css/jquery.localizationTool.css",
            ],
            "js" => [
                "vendor/datatables/js/jquery.dataTables.min.js",
                "js/plugins-init/datatables.init.js",
                "js/jquery.localizationTool.js",
                "js/translator.js",
                "js/custom.js",
            ],
            "seo" => [
                "meta" => [
                    [
                        "name" => "keywords",
                        "content" =>
                            "admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit, frontend, rtl",
                    ],
                    ["name" => "author", "content" => "DexignZone"],
                    ["name" => "robots", "content" => "index, follow"],
                    [
                        "name" => "viewport",
                        "content" =>
                            "width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover",
                    ],
                    [
                        "name" => "description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "property" => "og:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "property" => "og:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    ["name" => "format-detection", "content" => "telephone=no"],
                    [
                        "name" => "twitter:title",
                        "content" =>
                            "Zenix - Crypto Bootstrap Admin Dashboard + FrontEnd",
                    ],
                    [
                        "name" => "twitter:description",
                        "content" =>
                            "Elevate your administrative efficiency and enhance productivity with the Zenix Crypto Bootstrap Admin Dashboard + FrontEnd. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.",
                    ],
                    [
                        "name" => "twitter:image",
                        "content" =>
                            "https://zenix.dexignzone.com/xhtml/social-image.png",
                    ],
                    [
                        "name" => "twitter:card",
                        "content" => "summary_large_image",
                    ],
                ],
            ],
        ],
    ],
];
?>
