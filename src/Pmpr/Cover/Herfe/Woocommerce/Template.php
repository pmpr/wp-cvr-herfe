<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6551103c074cc             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\154\x69\x62\x72\141\x72\171" => IconInterface::eyikeaawgqmqgqkw, "\144\x61\x73\x68\142\157\x61\162\144" => IconInterface::ygcmqmkcsymeucoq, "\157\x72\x64\x65\162\x73" => IconInterface::goqumcwkcuygcaui, "\144\x6f\167\x6e\x6c\x6f\x61\x64\x73" => IconInterface::msyqysqykouywsua, "\145\144\151\164\55\141\x64\144\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\x70\141\x79\x6d\x65\156\164\55\x6d\x65\x74\150\157\144\163" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\x74\x2d\x61\x63\143\x6f\165\156\x74" => IconInterface::wqqgoiyyqicsycmm, "\143\165\163\164\x6f\x6d\145\162\55\x6c\x6f\147\x6f\165\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\x2e\151\x6e\160\x75\164\x2d\164\145\170\164") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\x6c\x61\142\x65\x6c\x5b\x66\x6f\162\75\42{$aokagokqyuysuksm}\42\x5d", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto qikaewekoecykeou; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto eucqomyqykgoiuge; qikaewekoecykeou: $kmooseagagygqskw = "\45"; if (is_rtl()) { goto qsgqwyqaqiowkmco; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; yqagomygmeoecwey: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\45\x73\40\x6f\x66\x66", PR__CVR__HERFE), $coyaokgmewckkkos), ["\143\154\x61\163\163" => "\160\162\151\x63\145\x2d\144\x69\163\x63\x6f\x75\x6e\164\55\x61\x6d\x6f\x75\156\x74\40\164\x65\170\x74\55\x73\x65\x63\157\156\x64\141\162\171\x20\x66\x73\55\163\155\x20\146\x6f\x6e\164\x2d\167\x65\x69\147\150\164\55\x62\x6f\154\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\143\x65\x5f\x64\151\163\143\x6f\x75\156\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); eucqomyqykgoiuge: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\x6e\40\x62\x74\x6e\x2d\154\147\x20\x62\x67\x2d\x70\162\x69\155\141\x72\x79\x2d\x73\145\143\157\156\x64\x61\x72\171\40\164\145\x78\x74\55\x77\150\x69\164\145\x20\160\170\x2d\70\40{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
