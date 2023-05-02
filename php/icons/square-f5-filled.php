<?php
require_once('../Icon.php');

class IconSquareF5Filled extends Icon {
    public static function getName(): string {
        return 'square-f5-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.333 2c1.96 0 3.56 1.537 3.662 3.472l.005 .195v12.666c0 1.96 -1.537 3.56 -3.472 3.662l-.195 .005h-12.666a3.667 3.667 0 0 1 -3.662 -3.472l-.005 -.195v-12.666c0 -1.96 1.537 -3.56 3.472 -3.662l.195 -.005h12.666zm-2.333 6h-3l-.117 .007a1 1 0 0 0 -.857 .764l-.02 .112l-.006 .117v3l.007 .117a1 1 0 0 0 .764 .857l.112 .02l.117 .006h2v1h-1.033l-.025 -.087l-.049 -.113a1 1 0 0 0 -1.893 .45c0 .867 .63 1.587 1.458 1.726l.148 .018l.144 .006h1.25l.157 -.006a2 2 0 0 0 1.819 -1.683l.019 -.162l.005 -.149v-1l-.006 -.157a2 2 0 0 0 -1.683 -1.819l-.162 -.019l-.149 -.005h-1v-1h2l.117 -.007a1 1 0 0 0 .857 -.764l.02 -.112l.006 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006zm-6 0h-2l-.117 .007a1 1 0 0 0 -.876 .876l-.007 .117v6l.007 .117a1 1 0 0 0 .876 .876l.117 .007l.117 -.007a1 1 0 0 0 .876 -.876l.007 -.117v-2h1l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007h-1v-1h1l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}