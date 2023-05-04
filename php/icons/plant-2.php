<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlant2 extends Icon {
    public static function getName(): string {
        return 'plant-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 9a10 10 0 1 0 20 0" />   <path d="M12 19a10 10 0 0 1 10 -10" />   <path d="M2 9a10 10 0 0 1 10 10" />   <path d="M12 4a9.7 9.7 0 0 1 2.99 7.5" />   <path d="M9.01 11.5a9.7 9.7 0 0 1 2.99 -7.5" />
        SVG;
    }
}