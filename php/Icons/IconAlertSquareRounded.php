<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlertSquareRounded extends \Tabler\Icon {
    public static function getName(): string {
        return 'alert-square-rounded';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />   <path d="M12 8v4" />   <path d="M12 16h.01" />
        SVG;
    }
}