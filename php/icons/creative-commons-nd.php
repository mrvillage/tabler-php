<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCreativeCommonsNd extends Icon {
    public static function getName(): string {
        return 'creative-commons-nd';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 10h6" />   <path d="M9 14h6" />
        SVG;
    }
}