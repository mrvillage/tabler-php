<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconUmbrella extends Icon {
    public static function getName(): string {
        return 'umbrella';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12a8 8 0 0 1 16 0z" />   <path d="M12 12v6a2 2 0 0 0 4 0" />
        SVG;
    }
}