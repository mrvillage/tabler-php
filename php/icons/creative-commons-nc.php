<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCreativeCommonsNc extends Tabler\Icon {
    public static function getName(): string {
        return 'creative-commons-nc';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M15 9h-4.5a1.5 1.5 0 0 0 0 3h3a1.5 1.5 0 0 1 0 3h-4.5" />   <path d="M12 7v2" />   <path d="M12 15v2" />   <path d="M6 6l3 3" />   <path d="M15 15l3 3" />
        SVG;
    }
}