<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63949c8dea05a             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Herfe\Container; use Pmpr\Cover\Herfe\Navigation\Walker\Desktop; use Pmpr\Cover\Herfe\Navigation\Walker\Mobile; use Pmpr\Cover\Herfe\Navigation\Walker\Walker; class Navigation extends Container { const eagmsgqygmiiqkmy = "\155\157\x62\x69\x6c\x65\55\155\x65\156\165"; const euamyqcwoicakggg = "\x64\145\x73\153\x74\x6f\x70\x2d\x6d\x65\x6e\x75"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x71\x6b\x61\x6b\x69\153\x75\x75\143\x73\x67\x69\x6b\x79\x71\x77"])->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\151\x6e\151\164", [$this, "\x73\161\x61\x69\x63\165\165\x67\x73\x63\157\163\x6f\153\x6d\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\137\156\x61\166\137\x6d\145\x6e\165\x5f\x61\162\147\x73", [$this, "\167\x69\153\155\x6d\143\147\x79\153\x73\x6b\171\x65\x65\171\171"]); } public function wegieaiumwsmoywe() : array { return [self::euamyqcwoicakggg => __("\104\x65\163\153\164\157\x70\x20\x4e\x61\166\x69\x67\141\x74\x69\x6f\156\40\115\145\156\165", PR__CVR__HERFE), self::eagmsgqygmiiqkmy => __("\x4d\157\x62\151\154\145\x20\x4e\x61\166\x69\x67\x61\164\x69\x6f\156\40\x4d\x65\156\165", PR__CVR__HERFE)]; } public function sqaicuugscosokmw() { $qyyeoyuaqwwmysuu = $this->wegieaiumwsmoywe(); foreach ($qyyeoyuaqwwmysuu as $igscmsiuisqaqwkk) { if (DecoratorTheme::kkawimmeccgmcawk($igscmsiuisqaqwkk)) { goto skkamseieeusycye; } DecoratorTheme::oqeqieqigwskaoks($igscmsiuisqaqwkk); skkamseieeusycye: wiysogeqqwgioyka: } soaccwqimeksgwiw: } public function qkakikuucsgikyqw() { foreach ($this->wegieaiumwsmoywe() as $igscmsiuisqaqwkk => $ymqmyyeuycgmigyo) { DecoratorTheme::uoieieeqeeowieyy($igscmsiuisqaqwkk, $ymqmyyeuycgmigyo); syiqkaasoueowwui: } cgiscsqwwgqqaeqi: } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { $igscmsiuisqaqwkk = ManipulateArray::get($ywmkwiwkosakssii, "\164\150\x65\155\145\137\154\x6f\x63\x61\x74\151\x6f\x6e"); $ggauoeuaesiymgee = [ "\x65\143\150\157" => true, "\155\145\156\x75" => '', "\x64\145\160\164\150" => 0, "\x61\146\x74\145\162" => '', "\167\141\154\x6b\x65\162" => new Walker(), "\142\145\146\x6f\x72\145" => '', "\x6d\x65\x6e\x75\x5f\x69\144" => '', "\154\x69\x5f\143\x6c\141\x73\x73" => '', "\143\157\156\164\141\x69\156\145\162" => '', "\x6c\x69\x6e\153\x5f\143\x6c\141\x73\163" => "\156\x61\166\x2d\154\151\156\x6b", "\151\x74\145\x6d\x73\137\167\162\x61\160" => '', "\x6d\145\156\x75\x5f\143\x6c\x61\163\163" => '', "\x6c\151\156\153\x5f\x61\146\x74\x65\x72" => '', "\x6c\x69\x6e\x6b\x5f\x62\x65\146\157\x72\x65" => '', "\x66\x61\x6c\154\142\x61\x63\x6b\137\x63\142" => false, "\x69\x74\x65\x6d\137\x73\x70\141\143\151\156\147" => "\144\x69\163\x63\x61\x72\144", "\143\157\x6e\164\141\x69\156\145\162\137\x69\144" => '', "\143\x6f\x6e\164\x61\x69\x6e\x65\x72\137\143\x6c\x61\x73\163" => '', "\x63\x6f\156\x74\141\x69\x6e\145\x72\x5f\141\162\x69\x61\137\154\141\x62\145\154" => '', ]; $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(array_filter($ywmkwiwkosakssii), $ggauoeuaesiymgee); $egkiuiwyukscsgwk = "\154\x69\163\164\55\x75\156\x73\164\171\x6c\145\144\40\x6d\x62\x2d\x30"; switch ($igscmsiuisqaqwkk) { case self::eagmsgqygmiiqkmy: $ywmkwiwkosakssii["\167\x61\154\x6b\145\162"] = new Mobile(); goto giaacoqqqsekcayy; case self::euamyqcwoicakggg: $egkiuiwyukscsgwk .= "\x20\144\55\146\154\x65\170\x20\x66\154\x65\x78\55\x72\157\x77"; $ywmkwiwkosakssii["\167\x61\154\x6b\x65\162"] = new Desktop(); goto giaacoqqqsekcayy; } ewymsmkkiksgwysk: giaacoqqqsekcayy: $ywmkwiwkosakssii["\151\x74\x65\155\x73\x5f\x77\x72\141\160"] = ManipulateHTML::uuccukgasskgimsq("\165\154", ["\143\154\141\163\163" => $egkiuiwyukscsgwk], "\45\x33\x24\x73"); return $ywmkwiwkosakssii; } }
