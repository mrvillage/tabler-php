<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDropletFilled extends \Tabler\Icon {
    public static function getName(): string {
        return 'droplet-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.801 11.003a6 6 0 1 0 10.396 -.003l-5.197 -8l-5.199 8.003z" stroke="#010202" stroke-width="0" fill="currentColor" />   <path d="M12 3v17" stroke-width="0" fill="currentColor" />   <path d="M12 12l3.544 -3.544" stroke-width="0" fill="currentColor" />   <path d="M12 17.3l5.558 -5.558" stroke-width="0" fill="currentColor" />
        SVG;
    }
}