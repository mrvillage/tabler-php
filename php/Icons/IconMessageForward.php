<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessageForward extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-forward';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />   <path d="M13 9l2 2l-2 2" />   <path d="M15 11h-6" />
        SVG;
    }
}