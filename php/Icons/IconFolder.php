<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFolder extends \Tabler\Icon {
    public static function getName(): string {
        return 'folder';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
        SVG;
    }
}