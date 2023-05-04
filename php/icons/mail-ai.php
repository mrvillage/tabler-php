<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailAi extends Tabler\Icon {
    public static function getName(): string {
        return 'mail-ai';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4" />   <path d="M3 7l8 5.345m4 -1.345l6 -4" />   <path d="M14 21v-4a2 2 0 1 1 4 0v4" />   <path d="M14 19h4" />   <path d="M21 15v6" />
        SVG;
    }
}