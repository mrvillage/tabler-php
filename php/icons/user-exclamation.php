<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconUserExclamation extends Icon {
    public static function getName(): string {
        return 'user-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />   <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.348 0 .686 .045 1.008 .128" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}