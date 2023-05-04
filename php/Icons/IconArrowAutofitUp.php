<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowAutofitUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-autofit-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4h-6a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h8" />   <path d="M18 20v-17" />   <path d="M15 6l3 -3l3 3" />
        SVG;
    }
}