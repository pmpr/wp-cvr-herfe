<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ee0deb7dd58             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\154\x69\142\x72\141\x72\x79" => IconInterface::eyikeaawgqmqgqkw, "\144\141\x73\x68\142\x6f\x61\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\x64\145\x72\x73" => IconInterface::goqumcwkcuygcaui, "\x64\157\167\x6e\x6c\157\x61\x64\x73" => IconInterface::msyqysqykouywsua, "\x65\x64\151\x74\55\x61\x64\144\162\145\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\141\x79\x6d\145\156\x74\x2d\x6d\x65\x74\x68\157\144\163" => IconInterface::acciucugwcskkwmi, "\x65\144\151\x74\55\x61\x63\143\x6f\x75\x6e\x74" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\163\x74\157\155\x65\162\55\x6c\x6f\147\157\165\x74" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\56\x69\156\x70\x75\164\55\164\x65\x78\x74") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\154\x61\x62\x65\154\x5b\x66\157\162\75\x22{$aokagokqyuysuksm}\42\135", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto cgewcsueoyaeikgm; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $kmooseagagygqskw = "\45"; if (is_rtl()) { goto ygkcacsyyckescqs; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; cuoqqgaygogsmmic: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x25\163\x20\x6f\x66\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\x6c\141\x73\163" => "\x70\x72\x69\x63\145\x2d\x64\x69\x73\143\x6f\x75\156\x74\x2d\x61\x6d\157\x75\x6e\x74\x20\164\x65\170\x74\55\x73\x65\143\157\x6e\x64\x61\162\171\40\146\163\x2d\x73\155\x20\x66\157\156\164\x2d\167\145\x69\x67\x68\x74\55\x62\x6f\154\x64"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\143\145\x5f\x64\151\x73\x63\157\165\x6e\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); sukskmcwsoysiuqu: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\156\40\x62\164\x6e\x2d\154\x67\40\x62\147\x2d\x70\162\151\x6d\141\x72\171\x2d\x73\x65\143\157\x6e\x64\x61\x72\171\x20\x74\x65\x78\164\55\167\150\151\x74\x65\x20\x70\170\x2d\70\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
