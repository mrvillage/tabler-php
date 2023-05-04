<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorldCancel extends Icon {
    public static function getName(): string {
        return 'world-cancel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 0 -8.985 9" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h9.9" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a16.991 16.991 0 0 1 2.53 10.275" />   <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 21l4 -4" />
        SVG;
    }
}