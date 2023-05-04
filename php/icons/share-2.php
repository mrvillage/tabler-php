<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShare2 extends Icon {
    public static function getName(): string {
        return 'share-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h-1a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-8a2 2 0 0 0 -2 -2h-1" />   <path d="M12 14v-11" />   <path d="M9 6l3 -3l3 3" />
        SVG;
    }
}