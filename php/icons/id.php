<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconId extends Tabler\Icon {
    public static function getName(): string {
        return 'id';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M15 8l2 0" />   <path d="M15 12l2 0" />   <path d="M7 16l10 0" />
        SVG;
    }
}