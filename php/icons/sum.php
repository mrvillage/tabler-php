<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSum extends Icon {
    public static function getName(): string {
        return 'sum';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 16v2a1 1 0 0 1 -1 1h-11l6 -7l-6 -7h11a1 1 0 0 1 1 1v2" />
        SVG;
    }
}