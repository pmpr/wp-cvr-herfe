<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65587a6182be6             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x6c\x69\x62\162\x61\162\x79" => IconInterface::eyikeaawgqmqgqkw, "\x64\141\x73\x68\142\x6f\x61\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\157\162\144\x65\x72\163" => IconInterface::goqumcwkcuygcaui, "\144\157\x77\156\154\157\x61\x64\163" => IconInterface::msyqysqykouywsua, "\x65\144\151\x74\55\141\x64\x64\162\145\x73\x73" => IconInterface::wykikkeyisimsmyy, "\x70\141\171\x6d\145\x6e\164\55\155\145\x74\150\157\x64\x73" => IconInterface::acciucugwcskkwmi, "\145\x64\151\x74\x2d\141\x63\x63\157\165\x6e\x74" => IconInterface::wqqgoiyyqicsycmm, "\143\165\163\x74\157\x6d\x65\x72\55\154\157\147\x6f\165\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\56\151\x6e\x70\165\164\x2d\164\x65\170\x74") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\154\x61\x62\x65\x6c\133\x66\157\x72\x3d\x22{$aokagokqyuysuksm}\42\x5d", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto qikaewekoecykeou; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto eucqomyqykgoiuge; qikaewekoecykeou: $kmooseagagygqskw = "\x25"; if (is_rtl()) { goto qsgqwyqaqiowkmco; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; yqagomygmeoecwey: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\x25\163\40\x6f\x66\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\143\x6c\141\x73\163" => "\160\162\x69\143\145\55\144\x69\x73\x63\x6f\x75\156\164\55\x61\155\x6f\165\156\164\x20\x74\x65\x78\x74\x2d\x73\x65\143\x6f\156\x64\x61\162\171\x20\x66\x73\x2d\163\x6d\x20\146\157\156\x74\x2d\167\x65\151\x67\x68\164\x2d\x62\x6f\154\x64"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\151\x63\145\x5f\x64\x69\163\143\157\165\156\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); eucqomyqykgoiuge: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\164\x6e\x20\x62\x74\x6e\55\x6c\x67\40\x62\x67\55\x70\x72\x69\x6d\141\162\x79\55\163\x65\143\x6f\x6e\x64\141\x72\x79\x20\164\145\170\x74\x2d\167\x68\151\164\x65\40\x70\x78\x2d\70\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
