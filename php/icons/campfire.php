<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCampfire extends Tabler\Icon {
    public static function getName(): string {
        return 'campfire';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 21l16 -4" />   <path d="M20 21l-16 -4" />   <path d="M12 15a4 4 0 0 0 4 -4c0 -3 -2 -3 -2 -8c-4 2 -6 5 -6 8a4 4 0 0 0 4 4z" />
        SVG;
    }
}