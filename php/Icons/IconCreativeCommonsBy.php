<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCreativeCommonsBy extends \Tabler\Icon {
    public static function getName(): string {
        return 'creative-commons-by';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 7m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9 13v-1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-.5l-.5 4h-2l-.5 -4h-.5a1 1 0 0 1 -1 -1z" />
        SVG;
    }
}