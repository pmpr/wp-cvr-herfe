<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642050ccc3848             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x6c\x69\142\162\141\x72\x79" => IconInterface::eyikeaawgqmqgqkw, "\x64\x61\x73\150\x62\x6f\141\x72\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\x64\145\162\x73" => IconInterface::goqumcwkcuygcaui, "\144\157\x77\x6e\154\x6f\141\144\163" => IconInterface::msyqysqykouywsua, "\x65\144\151\x74\55\x61\144\144\x72\145\163\163" => IconInterface::wykikkeyisimsmyy, "\160\141\171\155\145\156\x74\55\x6d\145\x74\x68\x6f\144\x73" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\x74\x2d\141\143\143\x6f\165\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\163\164\157\x6d\145\162\55\x6c\x6f\147\x6f\x75\x74" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\x2e\x69\156\160\165\164\55\x74\145\x78\164") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\x6c\141\142\145\x6c\133\x66\x6f\162\75\x22{$aokagokqyuysuksm}\42\x5d", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto uguigkcmukuouway; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $kmooseagagygqskw = "\x25"; if (is_rtl()) { goto usquiuuyiyqaeyiu; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto qicwaskssogcokgm; usquiuuyiyqaeyiu: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; qicwaskssogcokgm: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x25\163\x20\x6f\146\x66", PR__CVR__HERFE), $coyaokgmewckkkos), ["\143\x6c\141\163\163" => "\x70\162\x69\143\145\55\144\x69\163\143\157\165\156\164\x2d\141\x6d\x6f\x75\156\x74\x20\164\x65\170\164\x2d\163\145\143\x6f\156\x64\x61\x72\x79\x20\x66\x73\55\x73\x6d\40\x66\x6f\156\164\x2d\x77\x65\151\147\150\164\x2d\142\x6f\x6c\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\x69\x63\145\x5f\144\151\163\x63\157\x75\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); uqqaiagaeqgqgaiy: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\156\40\x62\x74\156\x2d\x6c\147\40\x62\147\x2d\160\x72\151\155\141\x72\171\55\163\x65\x63\x6f\156\144\141\x72\x79\40\164\x65\x78\164\x2d\167\150\x69\164\145\40\x70\170\55\70\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
