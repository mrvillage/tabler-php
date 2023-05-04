<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorldLongitude extends \Tabler\Icon {
    public static function getName(): string {
        return 'world-longitude';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M11.5 3a11.2 11.2 0 0 0 0 18" />   <path d="M12.5 3a11.2 11.2 0 0 1 0 18" />   <path d="M12 3l0 18" />
        SVG;
    }
}