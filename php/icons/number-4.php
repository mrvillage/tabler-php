<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNumber4 extends Tabler\Icon {
    public static function getName(): string {
        return 'number-4';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 20v-15l-8 11h10" />
        SVG;
    }
}