<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d82fbf3179b             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Navigation; use Pmpr\Common\Foundation\Decorator\DecoratorTheme; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Cover\Herfe\Container; use Pmpr\Cover\Herfe\Navigation\Walker\Desktop; use Pmpr\Cover\Herfe\Navigation\Walker\Mobile; use Pmpr\Cover\Herfe\Navigation\Walker\Walker; class Navigation extends Container { const eagmsgqygmiiqkmy = "\155\157\x62\151\154\x65\x2d\x6d\145\156\x75"; const euamyqcwoicakggg = "\x64\x65\163\153\x74\157\x70\x2d\x6d\x65\x6e\165"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x71\153\x61\153\151\153\x75\x75\x63\163\147\x69\x6b\171\161\167"])->qcsmikeggeemccuu("\141\144\155\151\x6e\137\151\x6e\151\164", [$this, "\163\x71\141\151\143\x75\x75\x67\163\143\x6f\x73\157\153\x6d\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\x5f\x6e\x61\166\x5f\155\145\x6e\165\137\141\162\147\x73", [$this, "\x77\151\153\x6d\155\x63\147\x79\x6b\163\153\x79\x65\145\171\x79"]); } public function wegieaiumwsmoywe() : array { return [self::euamyqcwoicakggg => __("\x44\x65\163\153\164\157\x70\40\116\x61\x76\151\147\141\164\151\157\156\x20\x4d\145\x6e\x75", PR__CVR__HERFE), self::eagmsgqygmiiqkmy => __("\115\157\x62\x69\x6c\145\x20\x4e\x61\x76\x69\147\141\164\151\157\156\x20\x4d\145\156\x75", PR__CVR__HERFE)]; } public function sqaicuugscosokmw() { $qyyeoyuaqwwmysuu = $this->wegieaiumwsmoywe(); foreach ($qyyeoyuaqwwmysuu as $igscmsiuisqaqwkk) { if (DecoratorTheme::kkawimmeccgmcawk($igscmsiuisqaqwkk)) { goto gkyawqqcmigqgaiq; } DecoratorTheme::oqeqieqigwskaoks($igscmsiuisqaqwkk); gkyawqqcmigqgaiq: wmywuusgukmmaams: } cmegwsegsosyqcai: } public function qkakikuucsgikyqw() { foreach ($this->wegieaiumwsmoywe() as $igscmsiuisqaqwkk => $ymqmyyeuycgmigyo) { DecoratorTheme::uoieieeqeeowieyy($igscmsiuisqaqwkk, $ymqmyyeuycgmigyo); egyyiccaeeiooaua: } ooeausyowguqicuo: } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { $igscmsiuisqaqwkk = ManipulateArray::get($ywmkwiwkosakssii, "\x74\x68\x65\x6d\145\137\x6c\x6f\x63\141\164\x69\157\156"); $ggauoeuaesiymgee = [ "\x65\x63\150\x6f" => true, "\155\145\156\x75" => '', "\x64\x65\x70\164\150" => 0, "\x61\x66\x74\145\162" => '', "\167\x61\154\x6b\x65\x72" => new Walker(), "\142\145\146\x6f\162\145" => '', "\155\x65\x6e\165\137\151\x64" => '', "\154\x69\x5f\143\x6c\141\x73\x73" => '', "\x63\x6f\156\164\x61\151\x6e\145\x72" => '', "\x6c\151\156\x6b\137\x63\x6c\x61\163\163" => "\x6e\x61\x76\55\x6c\151\156\153", "\x69\164\x65\x6d\163\x5f\x77\162\x61\x70" => '', "\155\145\156\165\137\143\x6c\141\163\x73" => '', "\154\x69\x6e\153\137\x61\x66\x74\145\x72" => '', "\x6c\x69\x6e\x6b\x5f\x62\145\146\x6f\162\x65" => '', "\146\x61\154\154\x62\x61\x63\153\x5f\143\142" => false, "\x69\164\x65\x6d\x5f\x73\160\141\x63\151\x6e\x67" => "\144\x69\163\x63\141\x72\x64", "\143\x6f\156\x74\141\151\x6e\145\162\137\x69\x64" => '', "\x63\x6f\156\164\141\151\x6e\x65\162\x5f\x63\154\141\x73\163" => '', "\143\157\x6e\x74\141\151\x6e\145\x72\137\141\x72\x69\x61\137\154\x61\142\145\154" => '', ]; $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(array_filter($ywmkwiwkosakssii), $ggauoeuaesiymgee); $egkiuiwyukscsgwk = "\x6c\151\163\x74\x2d\x75\156\x73\x74\171\154\145\144\40\x6d\x62\x2d\x30"; switch ($igscmsiuisqaqwkk) { case self::eagmsgqygmiiqkmy: $ywmkwiwkosakssii["\167\x61\154\x6b\x65\x72"] = new Mobile(); goto scisgsyemmsekgos; case self::euamyqcwoicakggg: $egkiuiwyukscsgwk .= "\x20\x64\55\146\x6c\x65\x78\40\146\154\145\170\x2d\x72\x6f\x77"; $ywmkwiwkosakssii["\x77\141\x6c\153\145\x72"] = new Desktop(); goto scisgsyemmsekgos; } cewmoqyysgsmuiya: scisgsyemmsekgos: $ywmkwiwkosakssii["\x69\x74\x65\x6d\163\137\x77\162\x61\x70"] = ManipulateHTML::uuccukgasskgimsq("\165\154", ["\x63\154\x61\163\163" => $egkiuiwyukscsgwk], "\45\63\x24\x73"); return $ywmkwiwkosakssii; } }
