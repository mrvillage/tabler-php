<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZip extends Tabler\Icon {
    public static function getName(): string {
        return 'zip';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 16v-8h2a2 2 0 1 1 0 4h-2" />   <path d="M12 8v8" />   <path d="M4 8h4l-4 8h4" />
        SVG;
    }
}