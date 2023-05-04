<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTableShare extends Tabler\Icon {
    public static function getName(): string {
        return 'table-share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21h-7a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v8" />   <path d="M3 10h18" />   <path d="M10 3v18" />   <path d="M16 22l5 -5" />   <path d="M21 21.5v-4.5h-4.5" />
        SVG;
    }
}