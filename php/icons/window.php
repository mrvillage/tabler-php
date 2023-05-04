<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWindow extends Tabler\Icon {
    public static function getName(): string {
        return 'window';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3c-3.866 0 -7 3.272 -7 7v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1 -1v-10c0 -3.728 -3.134 -7 -7 -7z" />   <path d="M5 13l14 0" />   <path d="M12 3l0 18" />
        SVG;
    }
}