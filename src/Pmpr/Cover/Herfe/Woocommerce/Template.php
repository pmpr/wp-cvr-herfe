<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a644c935775             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\154\x69\142\x72\x61\x72\171" => IconInterface::eyikeaawgqmqgqkw, "\144\141\163\150\x62\157\141\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\157\162\144\x65\x72\x73" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\x77\156\x6c\x6f\141\x64\x73" => IconInterface::msyqysqykouywsua, "\x65\144\x69\x74\55\x61\x64\144\x72\145\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\141\x79\x6d\145\x6e\164\x2d\155\x65\164\150\x6f\x64\x73" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\x74\x2d\141\x63\x63\157\165\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\x63\x75\x73\x74\157\155\x65\162\x2d\154\x6f\147\157\x75\x74" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\x2e\151\156\160\165\164\x2d\x74\x65\x78\x74") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\154\x61\142\145\154\133\146\157\x72\75\x22{$aokagokqyuysuksm}\42\135", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto mqkmcysgoiaouiwm; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $kmooseagagygqskw = "\45"; if (is_rtl()) { goto ogqmesokykywseys; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto ykomgumacooyomsk; ogqmesokykywseys: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; ykomgumacooyomsk: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x25\163\40\x6f\146\x66", PR__CVR__HERFE), $coyaokgmewckkkos), ["\143\154\x61\x73\163" => "\160\x72\x69\143\x65\x2d\x64\151\163\143\157\x75\x6e\x74\x2d\x61\155\157\x75\x6e\x74\40\164\145\170\164\55\x73\145\143\x6f\156\144\141\162\171\40\146\163\55\163\155\40\x66\x6f\x6e\x74\x2d\167\145\x69\x67\x68\164\x2d\142\x6f\x6c\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\x69\143\145\137\144\x69\163\x63\x6f\165\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); kosaqwikueyksqmw: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\156\x20\142\164\x6e\x2d\x6c\x67\40\142\147\x2d\160\x72\x69\x6d\141\x72\171\55\x73\x65\143\157\156\144\x61\162\x79\x20\x74\x65\x78\164\55\167\150\151\x74\145\40\160\x78\x2d\x38\40{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
