<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDirectionSign extends Tabler\Icon {
    public static function getName(): string {
        return 'direction-sign';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3.32 12.774l7.906 7.905c.427 .428 1.12 .428 1.548 0l7.905 -7.905a1.095 1.095 0 0 0 0 -1.548l-7.905 -7.905a1.095 1.095 0 0 0 -1.548 0l-7.905 7.905a1.095 1.095 0 0 0 0 1.548z" />   <path d="M8 12h7.5" />   <path d="M12 8.5l3.5 3.5l-3.5 3.5" />
        SVG;
    }
}