<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63920e2b477b5             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Interfaces\CommonInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass implements CommonInterface { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\141\163\150\x62\x6f\141\162\144" => IconInterface::ygcmqmkcsymeucoq, "\157\162\144\145\x72\x73" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\x77\156\154\x6f\x61\x64\x73" => IconInterface::msyqysqykouywsua, "\145\x64\x69\x74\x2d\x61\144\144\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\141\171\x6d\145\x6e\164\x2d\x6d\x65\164\x68\157\144\x73" => IconInterface::acciucugwcskkwmi, "\145\x64\151\164\55\x61\x63\143\157\165\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\x63\x75\x73\x74\157\155\x65\162\55\x6c\157\x67\157\165\164" => IconInterface::ygmsyksiyocgyyke]; return ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw, IconInterface::wukkqukiiuuoyiiy); } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, $yuumukkaswwoywya = "\x2e\151\x6e\x70\165\x74\x2d\x74\x65\170\164") : string { return DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw) { $aokagokqyuysuksm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, self::gouqcwikiiygyasc); $pkyyagewkiyckmwy = DOMCrawler::qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\x6c\x61\142\x65\x6c\x5b\x66\x6f\162\75\x22{$aokagokqyuysuksm}\42\x5d", true); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $xgwukwqqaseqagay = ManipulateWoocommerce::yqauycsoymimeise($product); if ($mgkceomocowocqyo === self::uwycywkimsycqwcy) { goto oyeyomcgkmgymogq; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto iesekaeqeomeuaui; oyeyomcgkmgymogq: $kmooseagagygqskw = "\x25"; if (is_rtl()) { goto gamqcwuwkikwqoay; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto mscyggqcesgqqksu; gamqcwuwkikwqoay: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; mscyggqcesgqqksu: $wewsywccwwomowkw = ManipulateHTML::gmqyuaqwgiayskei(sprintf(__("\45\x73\40\157\x66\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\x6c\x61\163\163" => "\160\162\151\x63\x65\x2d\x64\x69\163\x63\x6f\165\156\164\x2d\141\155\157\165\x6e\x74\40\x74\x65\170\x74\55\x73\x65\143\157\156\x64\141\162\171\x20\146\163\x2d\163\x6d\40\146\x6f\x6e\x74\x2d\x77\x65\x69\147\150\x74\x2d\142\x6f\154\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\162\151\143\x65\137\x64\151\x73\x63\x6f\x75\x6e\164"), $wewsywccwwomowkw, $xgwukwqqaseqagay); iesekaeqeomeuaui: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\164\x6e\40\x62\164\x6e\55\154\147\40\x62\147\55\x70\162\x69\155\141\162\171\55\163\145\143\x6f\156\x64\x61\162\171\40\164\x65\x78\x74\55\x77\150\151\x74\x65\40\160\170\x2d\70\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { return !DecoratorWoocommerce::wmqwkwyuqwksiiqk() && !DecoratorWoocommerce::gqoskmoekogyqwsc(); } }
