<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65801a68c9eed             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x6c\151\142\x72\x61\162\171" => IconInterface::eyikeaawgqmqgqkw, "\x64\x61\163\150\x62\157\x61\162\144" => IconInterface::ygcmqmkcsymeucoq, "\157\x72\x64\145\162\163" => IconInterface::goqumcwkcuygcaui, "\144\157\x77\156\154\x6f\x61\144\163" => IconInterface::msyqysqykouywsua, "\x65\144\151\x74\55\141\144\144\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\x61\171\x6d\145\x6e\x74\55\x6d\x65\164\x68\157\x64\x73" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\x74\x2d\141\x63\x63\157\165\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\x63\165\x73\x74\x6f\155\x65\x72\55\x6c\x6f\x67\157\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\56\x69\x6e\x70\165\x74\x2d\x74\145\170\x74") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\154\x61\142\145\x6c\133\146\x6f\x72\x3d\x22{$aokagokqyuysuksm}\x22\135", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto ogqmesokykywseys; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto ykomgumacooyomsk; ogqmesokykywseys: $kmooseagagygqskw = "\45"; if (is_rtl()) { goto cwwmimggaaecmucw; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; awoaooyoeoyeeqee: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x25\x73\x20\157\x66\x66", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\154\141\x73\x73" => "\x70\x72\x69\x63\145\x2d\144\151\163\x63\x6f\165\x6e\164\55\x61\x6d\157\x75\x6e\164\40\x74\145\170\x74\55\x73\145\143\x6f\x6e\144\x61\162\x79\x20\146\x73\x2d\x73\155\x20\146\157\156\x74\55\167\145\151\147\150\x74\x2d\x62\157\x6c\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\x69\143\x65\x5f\144\x69\163\143\157\165\156\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); ykomgumacooyomsk: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\x6e\40\x62\164\x6e\x2d\154\x67\x20\x62\147\x2d\x70\x72\x69\x6d\141\x72\x79\x2d\163\x65\x63\157\x6e\144\141\x72\171\x20\164\145\x78\164\55\167\x68\x69\164\x65\40\160\x78\55\x38\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
