<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorldOff extends Icon {
    public static function getName(): string {
        return 'world-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.657 5.615a9 9 0 1 0 12.717 12.739m1.672 -2.322a9 9 0 0 0 -12.066 -12.084" />   <path d="M3.6 9h5.4m4 0h7.4" />   <path d="M3.6 15h11.4m4 0h1.4" />   <path d="M11.5 3a17.001 17.001 0 0 0 -1.493 3.022m-.847 3.145c-.68 4.027 .1 8.244 2.34 11.833" />   <path d="M12.5 3a16.982 16.982 0 0 1 2.549 8.005m-.207 3.818a16.979 16.979 0 0 1 -2.342 6.177" />   <path d="M3 3l18 18" />
        SVG;
    }
}