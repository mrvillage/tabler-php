<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessageDots extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-dots';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />   <path d="M12 11l0 .01" />   <path d="M8 11l0 .01" />   <path d="M16 11l0 .01" />
        SVG;
    }
}