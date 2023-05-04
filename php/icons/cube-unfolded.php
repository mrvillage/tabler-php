<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCubeUnfolded extends \Tabler\Icon {
    public static function getName(): string {
        return 'cube-unfolded';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 15h10v5h5v-5h5v-5h-10v-5h-5v5h-5z" />   <path d="M7 15v-5h5v5h5v-5" />
        SVG;
    }
}