<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a7becd7e20             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x6c\x69\x62\162\x61\x72\171" => IconInterface::eyikeaawgqmqgqkw, "\144\x61\x73\150\x62\157\141\162\144" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\144\x65\162\163" => IconInterface::goqumcwkcuygcaui, "\144\157\167\156\154\157\141\144\x73" => IconInterface::msyqysqykouywsua, "\145\x64\151\x74\x2d\141\144\x64\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\x70\x61\171\155\145\156\x74\55\x6d\145\164\150\157\144\163" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\164\x2d\141\x63\143\x6f\165\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\143\165\163\164\x6f\155\145\162\55\x6c\157\x67\x6f\165\x74" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\x2e\x69\156\160\165\164\55\164\x65\170\x74") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\x6c\141\x62\145\154\133\146\x6f\162\75\x22{$aokagokqyuysuksm}\x22\135", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto qikaewekoecykeou; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto eucqomyqykgoiuge; qikaewekoecykeou: $kmooseagagygqskw = "\x25"; if (is_rtl()) { goto qsgqwyqaqiowkmco; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; yqagomygmeoecwey: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x25\x73\40\x6f\x66\x66", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\154\141\163\x73" => "\160\162\x69\143\x65\55\x64\151\x73\143\157\165\x6e\164\55\141\155\x6f\165\x6e\164\x20\x74\x65\x78\x74\55\x73\145\x63\157\x6e\144\x61\x72\171\40\x66\x73\55\163\155\x20\x66\x6f\156\x74\55\167\145\x69\147\x68\164\x2d\142\157\154\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x72\151\x63\145\137\x64\151\x73\143\x6f\165\156\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); eucqomyqykgoiuge: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\x6e\40\x62\164\156\55\x6c\x67\40\142\147\x2d\160\162\151\x6d\141\x72\171\x2d\x73\x65\143\x6f\156\144\141\x72\x79\x20\164\x65\170\x74\x2d\x77\150\151\x74\x65\40\160\170\55\70\40{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
