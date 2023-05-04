<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNotification extends Tabler\Icon {
    public static function getName(): string {
        return 'notification';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 6h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />   <path d="M17 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}