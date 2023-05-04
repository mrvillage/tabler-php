<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowAutofitHeight extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-autofit-height';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h6" />   <path d="M18 14v7" />   <path d="M18 3v7" />   <path d="M15 18l3 3l3 -3" />   <path d="M15 6l3 -3l3 3" />
        SVG;
    }
}