<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessage2Pause extends Tabler\Icon {
    public static function getName(): string {
        return 'message-2-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M13 20l-1 1l-3 -3h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}