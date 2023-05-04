<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconScale extends Icon {
    public static function getName(): string {
        return 'scale';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 20l10 0" />   <path d="M6 6l6 -1l6 1" />   <path d="M12 3l0 17" />   <path d="M9 12l-3 -6l-3 6a3 3 0 0 0 6 0" />   <path d="M21 12l-3 -6l-3 6a3 3 0 0 0 6 0" />
        SVG;
    }
}