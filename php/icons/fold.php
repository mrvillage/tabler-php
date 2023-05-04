<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFold extends Tabler\Icon {
    public static function getName(): string {
        return 'fold';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3v6l3 -3m-6 0l3 3" />   <path d="M12 21v-6l3 3m-6 0l3 -3" />   <path d="M4 12l1 0" />   <path d="M9 12l1 0" />   <path d="M14 12l1 0" />   <path d="M19 12l1 0" />
        SVG;
    }
}