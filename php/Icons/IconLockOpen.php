<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLockOpen extends \Tabler\Icon {
    public static function getName(): string {
        return 'lock-open';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M8 11v-5a4 4 0 0 1 8 0" />
        SVG;
    }
}