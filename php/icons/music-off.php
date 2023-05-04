<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMusicOff extends Tabler\Icon {
    public static function getName(): string {
        return 'music-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M14.42 14.45a3 3 0 1 0 4.138 4.119" />   <path d="M9 17v-8m0 -4v-1h10v11" />   <path d="M12 8h7" />   <path d="M3 3l18 18" />
        SVG;
    }
}