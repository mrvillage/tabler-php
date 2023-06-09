<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCone2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'cone-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 7m-7 0a7 3 0 1 0 14 0a7 3 0 1 0 -14 0" />   <path d="M19 7v.5l-7 12.5l-7 -12.5v-.5" />
        SVG;
    }
}