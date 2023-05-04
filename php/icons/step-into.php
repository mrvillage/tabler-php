<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconStepInto extends Icon {
    public static function getName(): string {
        return 'step-into';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3l0 12" />   <path d="M16 11l-4 4" />   <path d="M8 11l4 4" />   <path d="M12 20m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}