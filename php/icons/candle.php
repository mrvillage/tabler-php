<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCandle extends \Tabler\Icon {
    public static function getName(): string {
        return 'candle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 21h6v-9a1 1 0 0 0 -1 -1h-4a1 1 0 0 0 -1 1v9z" />   <path d="M12 3l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z" />
        SVG;
    }
}