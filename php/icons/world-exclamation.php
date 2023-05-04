<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorldExclamation extends Tabler\Icon {
    public static function getName(): string {
        return 'world-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.986 12.51a9 9 0 1 0 -5.71 7.873" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h10.9" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a17 17 0 0 1 0 18" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}