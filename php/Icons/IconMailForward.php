<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailForward extends \Tabler\Icon {
    public static function getName(): string {
        return 'mail-forward';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />   <path d="M3 6l9 6l9 -6" />   <path d="M15 18h6" />   <path d="M18 15l3 3l-3 3" />
        SVG;
    }
}