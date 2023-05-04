<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingArch extends \Tabler\Icon {
    public static function getName(): string {
        return 'building-arch';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21l18 0" />   <path d="M4 21v-15a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v15" />   <path d="M9 21v-8a3 3 0 0 1 6 0v8" />
        SVG;
    }
}