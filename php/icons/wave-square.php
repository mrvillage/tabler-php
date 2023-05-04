<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWaveSquare extends Tabler\Icon {
    public static function getName(): string {
        return 'wave-square';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h5v8h4v-16h4v8h5" />
        SVG;
    }
}