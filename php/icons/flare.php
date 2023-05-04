<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlare extends Icon {
    public static function getName(): string {
        return 'flare';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3l3 6l6 3l-6 3l-3 6l-3 -6l-6 -3l6 -3z" />
        SVG;
    }
}