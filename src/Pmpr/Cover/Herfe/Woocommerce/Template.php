<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce76464df21             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x6c\151\x62\162\x61\x72\171" => IconInterface::eyikeaawgqmqgqkw, "\x64\x61\163\150\x62\x6f\141\162\144" => IconInterface::ygcmqmkcsymeucoq, "\157\x72\144\x65\x72\163" => IconInterface::goqumcwkcuygcaui, "\x64\x6f\167\156\154\157\141\144\x73" => IconInterface::msyqysqykouywsua, "\x65\x64\x69\x74\55\141\x64\144\x72\145\163\x73" => IconInterface::wykikkeyisimsmyy, "\160\x61\x79\x6d\145\x6e\164\55\155\x65\x74\x68\x6f\144\x73" => IconInterface::acciucugwcskkwmi, "\x65\144\151\164\x2d\141\143\x63\157\165\x6e\164" => IconInterface::wqqgoiyyqicsycmm, "\143\165\163\x74\x6f\x6d\x65\162\x2d\154\x6f\147\157\165\x74" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, string $yuumukkaswwoywya = "\56\151\x6e\x70\165\x74\55\164\145\170\164") : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); return $smuykqsageuocuos->qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw, $smuykqsageuocuos) { $aokagokqyuysuksm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, Constants::gouqcwikiiygyasc); $pkyyagewkiyckmwy = $smuykqsageuocuos->qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\154\x61\142\145\x6c\133\146\x6f\x72\75\42{$aokagokqyuysuksm}\x22\x5d", true); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { goto egyyiccaeeiooaua; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto scisgsyemmsekgos; egyyiccaeeiooaua: $kmooseagagygqskw = "\x25"; if (is_rtl()) { goto gkyawqqcmigqgaiq; } $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; ooeausyowguqicuo: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(sprintf(__("\45\x73\x20\157\146\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\x63\154\141\x73\163" => "\160\x72\x69\x63\145\55\x64\151\163\143\157\x75\156\x74\55\x61\x6d\157\x75\156\x74\40\164\x65\x78\x74\55\163\145\x63\157\156\144\x61\x72\171\x20\146\163\x2d\163\155\x20\x66\157\x6e\x74\x2d\167\145\151\147\150\x74\x2d\142\x6f\x6c\144"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x72\151\x63\x65\x5f\x64\x69\163\x63\157\x75\x6e\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); scisgsyemmsekgos: return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\156\x20\142\x74\156\55\x6c\147\x20\x62\147\x2d\x70\162\x69\x6d\x61\x72\171\x2d\x73\145\x63\x6f\156\x64\141\x72\171\40\164\x65\x78\164\55\167\x68\x69\x74\145\x20\x70\x78\x2d\70\x20{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !$cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc(); } }
