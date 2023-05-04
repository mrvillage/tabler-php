<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessage2Bolt extends Tabler\Icon {
    public static function getName(): string {
        return 'message-2-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M13 20l-1 1l-3 -3h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}