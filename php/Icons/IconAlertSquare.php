<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlertSquare extends \Tabler\Icon {
    public static function getName(): string {
        return 'alert-square';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />   <path d="M12 8v4" />   <path d="M12 16h.01" />
        SVG;
    }
}