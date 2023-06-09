<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconServicemark extends \Tabler\Icon {
    public static function getName(): string {
        return 'servicemark';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M13 15v-6l3 4l3 -4v6" />
        SVG;
    }
}