<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailX extends \Tabler\Icon {
    public static function getName(): string {
        return 'mail-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 19h-8.5a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v6" />   <path d="M3 7l9 6l9 -6" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}