<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRazor extends Tabler\Icon {
    public static function getName(): string {
        return 'razor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3h10v4h-10z" />   <path d="M12 7v4" />   <path d="M12 11a2 2 0 0 1 2 2v6a2 2 0 1 1 -4 0v-6a2 2 0 0 1 2 -2z" />
        SVG;
    }
}