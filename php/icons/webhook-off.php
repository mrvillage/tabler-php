<?php
require_once(__DIR__ . '../Icon.php');

class IconWebhookOff extends Icon {
    public static function getName(): string {
        return 'webhook-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.876 13.61a4 4 0 1 0 6.124 3.39h6" />   <path d="M15.066 20.502a4 4 0 0 0 4.763 -.675m1.171 -2.827a4 4 0 0 0 -4 -4" />   <path d="M16 8a4 4 0 0 0 -6.824 -2.833m-1.176 2.833c0 1.506 .77 2.818 2 3.5l-3 5.5" />   <path d="M3 3l18 18" />
        SVG;
    }
}