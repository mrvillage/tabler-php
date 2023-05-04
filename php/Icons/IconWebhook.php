<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWebhook extends \Tabler\Icon {
    public static function getName(): string {
        return 'webhook';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.876 13.61a4 4 0 1 0 6.124 3.39h6" />   <path d="M15.066 20.502a4 4 0 1 0 1.934 -7.502c-.706 0 -1.424 .179 -2 .5l-3 -5.5" />   <path d="M16 8a4 4 0 1 0 -8 0c0 1.506 .77 2.818 2 3.5l-3 5.5" />
        SVG;
    }
}