<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailPlus extends Tabler\Icon {
    public static function getName(): string {
        return 'mail-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v5.5" />   <path d="M16 19h6" />   <path d="M19 16v6" />   <path d="M3 7l9 6l9 -6" />
        SVG;
    }
}