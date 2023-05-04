<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFriendsOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'friends-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5a2 2 0 0 0 2 2m2 -2a2 2 0 0 0 -2 -2" />   <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />   <path d="M17 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M15 22v-4h-2l1.254 -3.763m1.036 -2.942a1 1 0 0 1 .71 -.295h2a1 1 0 0 1 1 1l1.503 4.508m-1.503 2.492v3" />   <path d="M3 3l18 18" />
        SVG;
    }
}