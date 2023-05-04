<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRotate extends Tabler\Icon {
    public static function getName(): string {
        return 'rotate';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19.95 11a8 8 0 1 0 -.5 4m.5 5v-5h-5" />
        SVG;
    }
}