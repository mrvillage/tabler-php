<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBox extends \Tabler\Icon {
    public static function getName(): string {
        return 'box';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />   <path d="M12 12l8 -4.5" />   <path d="M12 12l0 9" />   <path d="M12 12l-8 -4.5" />
        SVG;
    }
}