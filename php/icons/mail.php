<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMail extends Icon {
    public static function getName(): string {
        return 'mail';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />   <path d="M3 7l9 6l9 -6" />
        SVG;
    }
}