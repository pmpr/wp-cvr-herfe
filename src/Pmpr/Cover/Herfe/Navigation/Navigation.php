<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a8ae03d951             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Herfe\Container; use Pmpr\Cover\Herfe\Navigation\Walker\Desktop; use Pmpr\Cover\Herfe\Navigation\Walker\Mobile; use Pmpr\Cover\Herfe\Navigation\Walker\Walker; class Navigation extends Container { const eagmsgqygmiiqkmy = "\x6d\157\142\151\154\145\x2d\x6d\x65\x6e\165"; const euamyqcwoicakggg = "\x64\x65\x73\x6b\164\157\x70\55\155\145\156\x75"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x71\153\141\x6b\x69\153\x75\165\143\163\x67\151\153\x79\161\x77"])->qcsmikeggeemccuu("\141\144\155\151\x6e\137\151\x6e\x69\164", [$this, "\x73\161\141\151\x63\165\165\x67\163\143\x6f\x73\157\x6b\x6d\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x70\x5f\156\x61\166\x5f\155\x65\156\165\x5f\141\x72\x67\163", [$this, "\x77\151\153\155\155\x63\x67\171\x6b\163\153\171\x65\145\171\171"]); } public function wegieaiumwsmoywe() : array { return [self::euamyqcwoicakggg => __("\104\145\x73\153\x74\x6f\x70\x20\116\x61\x76\x69\147\141\164\x69\157\x6e\40\115\x65\x6e\165", PR__CVR__HERFE), self::eagmsgqygmiiqkmy => __("\115\x6f\142\x69\x6c\x65\40\116\x61\x76\x69\x67\x61\164\x69\157\156\40\x4d\145\156\165", PR__CVR__HERFE)]; } public function sqaicuugscosokmw() { $qyyeoyuaqwwmysuu = $this->wegieaiumwsmoywe(); foreach ($qyyeoyuaqwwmysuu as $igscmsiuisqaqwkk) { if (DecoratorTheme::kkawimmeccgmcawk($igscmsiuisqaqwkk)) { goto skkamseieeusycye; } DecoratorTheme::oqeqieqigwskaoks($igscmsiuisqaqwkk); skkamseieeusycye: wiysogeqqwgioyka: } soaccwqimeksgwiw: } public function qkakikuucsgikyqw() { foreach ($this->wegieaiumwsmoywe() as $igscmsiuisqaqwkk => $ymqmyyeuycgmigyo) { DecoratorTheme::uoieieeqeeowieyy($igscmsiuisqaqwkk, $ymqmyyeuycgmigyo); syiqkaasoueowwui: } cgiscsqwwgqqaeqi: } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { $igscmsiuisqaqwkk = ManipulateArray::get($ywmkwiwkosakssii, "\164\150\x65\155\145\x5f\x6c\157\143\141\x74\x69\157\x6e"); $ggauoeuaesiymgee = [ "\145\143\x68\x6f" => true, "\x6d\x65\156\x75" => '', "\144\145\x70\x74\x68" => 0, "\x61\x66\164\145\162" => '', "\x77\141\x6c\x6b\145\162" => new Walker(), "\142\x65\146\157\162\x65" => '', "\x6d\x65\156\165\x5f\x69\x64" => '', "\x6c\x69\x5f\143\154\x61\x73\x73" => '', "\143\x6f\x6e\164\x61\151\x6e\145\162" => '', "\154\x69\x6e\153\x5f\143\x6c\141\x73\163" => "\156\x61\x76\55\154\x69\156\153", "\x69\164\145\x6d\x73\x5f\x77\x72\141\x70" => '', "\155\145\156\x75\x5f\143\x6c\x61\163\163" => '', "\x6c\151\x6e\x6b\x5f\x61\x66\164\145\x72" => '', "\154\x69\156\x6b\137\x62\x65\146\157\162\x65" => '', "\146\x61\154\154\x62\x61\x63\x6b\x5f\143\142" => false, "\151\164\x65\155\137\x73\x70\x61\x63\x69\156\x67" => "\144\x69\163\x63\x61\162\144", "\143\157\x6e\x74\141\x69\x6e\x65\x72\137\151\144" => '', "\x63\157\x6e\164\x61\151\156\x65\162\137\x63\x6c\141\x73\163" => '', "\143\157\x6e\164\x61\x69\156\x65\x72\x5f\141\162\151\141\x5f\154\141\142\145\154" => '', ]; $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(array_filter($ywmkwiwkosakssii), $ggauoeuaesiymgee); $egkiuiwyukscsgwk = "\154\x69\x73\164\x2d\x75\156\x73\x74\x79\154\145\x64\x20\x6d\142\55\x30"; switch ($igscmsiuisqaqwkk) { case self::eagmsgqygmiiqkmy: $ywmkwiwkosakssii["\167\141\x6c\153\145\x72"] = new Mobile(); goto giaacoqqqsekcayy; case self::euamyqcwoicakggg: $egkiuiwyukscsgwk .= "\40\144\55\x66\x6c\x65\x78\40\146\x6c\x65\x78\x2d\162\157\167"; $ywmkwiwkosakssii["\x77\141\x6c\153\145\x72"] = new Desktop(); goto giaacoqqqsekcayy; } ewymsmkkiksgwysk: giaacoqqqsekcayy: $ywmkwiwkosakssii["\x69\x74\x65\155\x73\x5f\167\x72\x61\160"] = ManipulateHTML::uuccukgasskgimsq("\165\x6c", ["\143\x6c\141\x73\163" => $egkiuiwyukscsgwk], "\x25\x33\44\x73"); return $ywmkwiwkosakssii; } }
