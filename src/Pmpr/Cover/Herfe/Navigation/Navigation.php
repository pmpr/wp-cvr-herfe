<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638bc067af974             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Herfe\Container; use Pmpr\Cover\Herfe\Navigation\Walker\Desktop; use Pmpr\Cover\Herfe\Navigation\Walker\Mobile; use Pmpr\Cover\Herfe\Navigation\Walker\Walker; class Navigation extends Container { const eagmsgqygmiiqkmy = "\x6d\157\x62\151\154\145\x2d\x6d\145\156\x75"; const euamyqcwoicakggg = "\x64\x65\x73\x6b\x74\157\x70\55\155\145\156\x75"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\161\153\141\153\151\153\165\x75\x63\163\x67\x69\x6b\x79\x71\x77"])->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\151\156\151\x74", [$this, "\163\x71\x61\151\x63\165\x75\147\x73\x63\157\163\x6f\153\x6d\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\x5f\x6e\x61\x76\137\155\145\x6e\x75\x5f\x61\162\x67\x73", [$this, "\x77\x69\153\x6d\x6d\x63\x67\171\x6b\x73\x6b\171\145\x65\x79\x79"]); } public function wegieaiumwsmoywe() : array { return [self::euamyqcwoicakggg => __("\104\x65\x73\x6b\164\157\x70\40\116\141\166\x69\x67\x61\x74\x69\157\156\40\x4d\145\x6e\165", PR__CVR__HERFE), self::eagmsgqygmiiqkmy => __("\x4d\x6f\142\151\154\145\x20\x4e\141\166\x69\x67\x61\164\151\157\x6e\40\x4d\x65\156\165", PR__CVR__HERFE)]; } public function sqaicuugscosokmw() { $qyyeoyuaqwwmysuu = $this->wegieaiumwsmoywe(); foreach ($qyyeoyuaqwwmysuu as $igscmsiuisqaqwkk) { if (DecoratorTheme::kkawimmeccgmcawk($igscmsiuisqaqwkk)) { goto skkamseieeusycye; } DecoratorTheme::oqeqieqigwskaoks($igscmsiuisqaqwkk); skkamseieeusycye: wiysogeqqwgioyka: } soaccwqimeksgwiw: } public function qkakikuucsgikyqw() { foreach ($this->wegieaiumwsmoywe() as $igscmsiuisqaqwkk => $ymqmyyeuycgmigyo) { DecoratorTheme::uoieieeqeeowieyy($igscmsiuisqaqwkk, $ymqmyyeuycgmigyo); syiqkaasoueowwui: } cgiscsqwwgqqaeqi: } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { $igscmsiuisqaqwkk = ManipulateArray::get($ywmkwiwkosakssii, "\164\150\x65\x6d\145\x5f\154\x6f\143\141\x74\x69\x6f\156"); $ggauoeuaesiymgee = [ "\145\x63\x68\157" => true, "\155\x65\156\x75" => '', "\x64\x65\160\164\x68" => 0, "\x61\146\164\145\x72" => '', "\x77\141\154\153\145\162" => new Walker(), "\142\145\x66\157\162\145" => '', "\x6d\x65\x6e\x75\137\151\144" => '', "\154\151\137\x63\154\x61\x73\163" => '', "\x63\x6f\x6e\164\x61\151\x6e\x65\x72" => '', "\x6c\151\x6e\x6b\x5f\143\154\141\x73\x73" => "\156\x61\166\x2d\154\151\156\x6b", "\x69\x74\x65\155\x73\137\x77\x72\141\160" => '', "\x6d\x65\x6e\165\x5f\143\x6c\x61\x73\x73" => '', "\154\x69\x6e\x6b\x5f\141\146\164\145\162" => '', "\x6c\151\x6e\x6b\137\x62\x65\146\157\x72\145" => '', "\x66\141\x6c\x6c\x62\141\143\153\x5f\x63\142" => false, "\151\164\145\x6d\137\x73\x70\141\143\151\156\x67" => "\x64\151\163\143\141\162\x64", "\x63\157\x6e\164\141\151\156\x65\x72\137\151\144" => '', "\x63\157\156\x74\x61\151\x6e\x65\x72\x5f\143\x6c\x61\x73\x73" => '', "\143\157\156\164\141\151\156\x65\x72\137\x61\162\151\141\137\154\x61\142\x65\x6c" => '', ]; $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(array_filter($ywmkwiwkosakssii), $ggauoeuaesiymgee); $egkiuiwyukscsgwk = "\154\151\x73\164\x2d\x75\x6e\x73\x74\x79\x6c\145\144\x20\x6d\142\55\60"; switch ($igscmsiuisqaqwkk) { case self::eagmsgqygmiiqkmy: $ywmkwiwkosakssii["\167\141\x6c\153\x65\x72"] = new Mobile(); goto giaacoqqqsekcayy; case self::euamyqcwoicakggg: $egkiuiwyukscsgwk .= "\40\x64\55\146\x6c\145\170\40\x66\x6c\x65\x78\55\x72\x6f\x77"; $ywmkwiwkosakssii["\167\x61\x6c\x6b\145\162"] = new Desktop(); goto giaacoqqqsekcayy; } ewymsmkkiksgwysk: giaacoqqqsekcayy: $ywmkwiwkosakssii["\x69\x74\x65\x6d\x73\x5f\167\x72\141\160"] = ManipulateHTML::uuccukgasskgimsq("\165\x6c", ["\143\x6c\x61\x73\163" => $egkiuiwyukscsgwk], "\x25\x33\44\x73"); return $ywmkwiwkosakssii; } }
