<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMouseOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'mouse-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7.733 3.704a3.982 3.982 0 0 1 2.267 -.704h4a4 4 0 0 1 4 4v7m-.1 3.895a4 4 0 0 1 -3.9 3.105h-4a4 4 0 0 1 -4 -4v-10c0 -.3 .033 -.593 .096 -.874" />   <path d="M12 7v1" />   <path d="M3 3l18 18" />
        SVG;
    }
}