<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657855c808b21             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\154\151\142\x72\x61\x72\171" => IconInterface::eyikeaawgqmqgqkw, "\144\x61\163\150\142\x6f\x61\x72\144" => IconInterface::ygcmqmkcsymeucoq, "\x6f\162\144\x65\162\163" => IconInterface::goqumcwkcuygcaui, "\144\x6f\167\x6e\x6c\x6f\141\144\x73" => IconInterface::msyqysqykouywsua, "\145\x64\151\x74\x2d\x61\x64\x64\162\145\163\x73" => IconInterface::wykikkeyisimsmyy, "\x70\141\171\x6d\145\x6e\x74\x2d\155\x65\164\x68\157\x64\163" => IconInterface::acciucugwcskkwmi, "\145\x64\x69\164\x2d\x61\x63\143\157\x75\x6e\x74" => IconInterface::wqqgoiyyqicsycmm, "\x63\165\163\164\x6f\155\145\x72\55\x6c\x6f\147\x6f\165\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\56\x69\x6e\x70\165\x74\x2d\x74\145\x78\164") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\154\141\x62\x65\154\133\146\x6f\x72\75\42{$aokagokqyuysuksm}\x22\x5d", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto sycygoiaiqqageym; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto gygawoqywkukmqee; sycygoiaiqqageym: $kmooseagagygqskw = "\45"; if (is_rtl()) { goto ycakugokkqkuqyiu; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; oouoqimaaqcmccay: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\45\x73\40\x6f\146\x66", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\x6c\x61\x73\163" => "\x70\162\x69\143\145\55\144\151\163\143\157\165\x6e\x74\55\x61\x6d\157\x75\156\164\x20\x74\x65\170\x74\55\x73\145\143\x6f\156\x64\141\x72\x79\x20\146\163\55\x73\155\x20\x66\x6f\x6e\x74\55\167\145\151\147\x68\164\55\142\x6f\154\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\151\x63\x65\x5f\x64\151\163\143\157\x75\156\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); gygawoqywkukmqee: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\x74\156\x20\142\x74\x6e\x2d\x6c\147\40\142\147\55\x70\162\151\155\141\162\171\55\163\x65\x63\157\156\144\x61\162\x79\x20\164\145\x78\164\55\167\x68\x69\164\x65\x20\160\170\55\x38\40{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
