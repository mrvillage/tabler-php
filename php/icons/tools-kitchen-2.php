<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconToolsKitchen2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'tools-kitchen-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3" />
        SVG;
    }
}