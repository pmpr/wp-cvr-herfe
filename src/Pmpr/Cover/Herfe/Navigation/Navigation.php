<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638caba970184             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Herfe\Container; use Pmpr\Cover\Herfe\Navigation\Walker\Desktop; use Pmpr\Cover\Herfe\Navigation\Walker\Mobile; use Pmpr\Cover\Herfe\Navigation\Walker\Walker; class Navigation extends Container { const eagmsgqygmiiqkmy = "\155\157\142\x69\154\x65\55\x6d\145\x6e\x75"; const euamyqcwoicakggg = "\144\145\163\153\x74\x6f\160\55\x6d\145\x6e\165"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\161\x6b\141\153\151\153\165\165\x63\x73\147\151\153\171\161\167"])->qcsmikeggeemccuu("\x61\144\x6d\x69\156\x5f\151\x6e\x69\164", [$this, "\163\x71\141\x69\x63\165\x75\x67\163\143\157\x73\x6f\153\x6d\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\137\156\141\166\137\x6d\x65\156\x75\x5f\141\x72\147\163", [$this, "\167\x69\x6b\155\x6d\143\x67\171\153\163\x6b\171\145\145\171\171"]); } public function wegieaiumwsmoywe() : array { return [self::euamyqcwoicakggg => __("\104\x65\x73\x6b\164\x6f\160\40\x4e\141\x76\151\147\141\164\x69\x6f\x6e\x20\x4d\x65\156\x75", PR__CVR__HERFE), self::eagmsgqygmiiqkmy => __("\x4d\157\142\x69\154\x65\x20\116\x61\166\x69\147\141\164\x69\x6f\156\40\115\x65\156\165", PR__CVR__HERFE)]; } public function sqaicuugscosokmw() { $qyyeoyuaqwwmysuu = $this->wegieaiumwsmoywe(); foreach ($qyyeoyuaqwwmysuu as $igscmsiuisqaqwkk) { if (DecoratorTheme::kkawimmeccgmcawk($igscmsiuisqaqwkk)) { goto skkamseieeusycye; } DecoratorTheme::oqeqieqigwskaoks($igscmsiuisqaqwkk); skkamseieeusycye: wiysogeqqwgioyka: } soaccwqimeksgwiw: } public function qkakikuucsgikyqw() { foreach ($this->wegieaiumwsmoywe() as $igscmsiuisqaqwkk => $ymqmyyeuycgmigyo) { DecoratorTheme::uoieieeqeeowieyy($igscmsiuisqaqwkk, $ymqmyyeuycgmigyo); syiqkaasoueowwui: } cgiscsqwwgqqaeqi: } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { $igscmsiuisqaqwkk = ManipulateArray::get($ywmkwiwkosakssii, "\x74\150\145\155\x65\x5f\154\157\x63\x61\164\151\x6f\156"); $ggauoeuaesiymgee = [ "\x65\x63\x68\x6f" => true, "\155\145\x6e\165" => '', "\144\x65\160\164\x68" => 0, "\x61\x66\164\x65\162" => '', "\167\x61\x6c\x6b\145\162" => new Walker(), "\142\x65\146\157\162\145" => '', "\155\x65\x6e\x75\137\151\x64" => '', "\x6c\151\137\x63\x6c\141\x73\163" => '', "\x63\157\156\164\x61\x69\156\x65\162" => '', "\x6c\x69\x6e\153\137\143\x6c\x61\x73\163" => "\x6e\141\166\55\154\151\x6e\153", "\x69\x74\145\x6d\x73\137\x77\162\141\x70" => '', "\x6d\145\156\165\x5f\143\x6c\x61\x73\163" => '', "\154\x69\156\x6b\137\x61\146\164\x65\162" => '', "\154\x69\156\x6b\x5f\142\145\146\157\x72\145" => '', "\146\x61\x6c\154\142\141\x63\x6b\137\x63\x62" => false, "\151\x74\145\155\x5f\163\x70\x61\143\x69\156\147" => "\x64\x69\163\x63\x61\x72\x64", "\x63\157\x6e\x74\x61\x69\156\145\x72\x5f\151\144" => '', "\x63\x6f\x6e\164\x61\x69\x6e\145\162\x5f\x63\154\x61\163\163" => '', "\143\x6f\x6e\164\x61\151\156\145\x72\x5f\141\x72\151\141\x5f\x6c\x61\x62\x65\154" => '', ]; $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(array_filter($ywmkwiwkosakssii), $ggauoeuaesiymgee); $egkiuiwyukscsgwk = "\x6c\151\163\164\x2d\x75\156\163\164\171\154\145\144\x20\x6d\x62\x2d\60"; switch ($igscmsiuisqaqwkk) { case self::eagmsgqygmiiqkmy: $ywmkwiwkosakssii["\167\x61\x6c\153\x65\x72"] = new Mobile(); goto giaacoqqqsekcayy; case self::euamyqcwoicakggg: $egkiuiwyukscsgwk .= "\x20\144\55\146\x6c\145\x78\x20\146\154\145\170\x2d\x72\157\x77"; $ywmkwiwkosakssii["\167\141\154\153\x65\162"] = new Desktop(); goto giaacoqqqsekcayy; } ewymsmkkiksgwysk: giaacoqqqsekcayy: $ywmkwiwkosakssii["\x69\164\x65\x6d\x73\137\x77\x72\141\x70"] = ManipulateHTML::uuccukgasskgimsq("\165\x6c", ["\143\x6c\x61\163\163" => $egkiuiwyukscsgwk], "\45\x33\x24\x73"); return $ywmkwiwkosakssii; } }
