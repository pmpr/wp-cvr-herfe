<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63f1f8be1feda             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\154\151\x62\x72\x61\x72\x79" => IconInterface::eyikeaawgqmqgqkw, "\144\141\x73\x68\142\157\141\162\144" => IconInterface::ygcmqmkcsymeucoq, "\x6f\x72\x64\145\x72\163" => IconInterface::goqumcwkcuygcaui, "\144\x6f\167\156\154\x6f\141\x64\163" => IconInterface::msyqysqykouywsua, "\x65\144\151\x74\x2d\x61\x64\144\162\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\x70\141\x79\x6d\145\156\x74\55\155\x65\164\x68\x6f\144\x73" => IconInterface::acciucugwcskkwmi, "\x65\x64\151\x74\55\x61\143\x63\x6f\x75\156\164" => IconInterface::wqqgoiyyqicsycmm, "\143\165\163\x74\157\155\x65\162\x2d\x6c\157\x67\157\x75\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\x2e\x69\156\160\165\164\x2d\x74\145\170\x74") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\154\141\142\x65\154\x5b\x66\x6f\x72\75\42{$aokagokqyuysuksm}\x22\135", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto mkwkkmkgiqiamacc; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto uaqackioaiqwcocy; mkwkkmkgiqiamacc: $kmooseagagygqskw = "\45"; if (is_rtl()) { goto uaukmuiwskcemcsw; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto sockeswygwcskeuq; uaukmuiwskcemcsw: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; sockeswygwcskeuq: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\45\163\x20\x6f\x66\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\x6c\x61\x73\163" => "\160\x72\151\143\x65\x2d\144\x69\x73\143\157\165\x6e\164\x2d\141\155\157\165\156\x74\40\164\145\170\x74\55\163\145\143\x6f\156\144\141\x72\x79\x20\146\x73\x2d\163\155\x20\x66\x6f\x6e\164\x2d\167\145\x69\x67\150\164\x2d\142\x6f\x6c\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x72\151\x63\145\x5f\x64\151\163\143\x6f\165\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); uaqackioaiqwcocy: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\164\x6e\x20\142\164\x6e\55\x6c\x67\40\x62\x67\55\160\162\151\x6d\141\162\171\55\x73\145\x63\157\x6e\x64\x61\162\171\40\164\145\170\x74\x2d\x77\x68\151\164\x65\x20\160\x78\55\70\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
