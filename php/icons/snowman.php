<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSnowman extends Tabler\Icon {
    public static function getName(): string {
        return 'snowman';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a4 4 0 0 1 2.906 6.75a6 6 0 1 1 -5.81 0a4 4 0 0 1 2.904 -6.75z" />   <path d="M17.5 11.5l2.5 -1.5" />   <path d="M6.5 11.5l-2.5 -1.5" />   <path d="M12 13h.01" />   <path d="M12 16h.01" />
        SVG;
    }
}