<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconInfoCircle extends Tabler\Icon {
    public static function getName(): string {
        return 'info-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />   <path d="M12 9h.01" />   <path d="M11 12h1v4h1" />
        SVG;
    }
}