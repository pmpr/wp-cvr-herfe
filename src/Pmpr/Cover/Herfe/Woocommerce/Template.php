<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716e4220edb3             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe\Woocommerce; use DOMElement; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Herfe\Traits\CommonTrait; abstract class Template extends BaseClass { use CommonTrait; public function uuiqowweqqewoysu(?string $uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\154\x69\142\162\141\x72\x79" => IconInterface::eyikeaawgqmqgqkw, "\x64\141\163\x68\142\x6f\141\162\x64" => IconInterface::ygcmqmkcsymeucoq, "\157\162\144\x65\x72\x73" => IconInterface::goqumcwkcuygcaui, "\144\157\167\x6e\154\157\x61\144\163" => IconInterface::msyqysqykouywsua, "\145\x64\x69\164\x2d\141\x64\144\x72\x65\x73\163" => IconInterface::wykikkeyisimsmyy, "\160\x61\171\155\x65\156\164\x2d\x6d\x65\x74\150\x6f\144\163" => IconInterface::acciucugwcskkwmi, "\x65\x64\151\164\x2d\141\x63\143\x6f\x75\156\164" => IconInterface::wqqgoiyyqicsycmm, "\143\x75\163\164\157\155\x65\x72\55\154\x6f\x67\157\165\x74" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function saeymaigcmemkumm($nsmgceoqaqogqmuw, string $yuumukkaswwoywya = "\x2e\x69\156\x70\x75\x74\55\x74\x65\170\x74") : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); return $smuykqsageuocuos->qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($nsmgceoqaqogqmuw, $smuykqsageuocuos) { $aokagokqyuysuksm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, Constants::gouqcwikiiygyasc); $pkyyagewkiyckmwy = $smuykqsageuocuos->qqimkcgcmeewwwei($nsmgceoqaqogqmuw, "\x6c\141\x62\145\154\x5b\146\157\162\75\x22{$aokagokqyuysuksm}\x22\135", true); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::moacsmsigegyweoc, $pkyyagewkiyckmwy); return $ymyisaeksssueeik; }); } public function yqauycsoymimeise($product, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $kmooseagagygqskw = "\x25"; if (is_rtl()) { $coyaokgmewckkkos = $kmooseagagygqskw . $xgwukwqqaseqagay; } else { $coyaokgmewckkkos = $xgwukwqqaseqagay . $kmooseagagygqskw; } $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(sprintf(__("\x25\163\x20\157\146\146", PR__CVR__HERFE), $coyaokgmewckkkos), ["\143\x6c\x61\x73\163" => "\x70\162\x69\143\145\x2d\144\151\x73\x63\157\x75\x6e\164\55\x61\x6d\x6f\x75\156\x74\40\x74\x65\x78\164\55\x73\x65\x63\157\x6e\x64\x61\162\x79\x20\146\x73\55\163\155\x20\x66\157\156\164\x2d\x77\145\x69\147\150\164\x2d\142\157\154\x64"]); $wewsywccwwomowkw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\162\151\143\145\137\144\x69\163\x63\x6f\x75\156\x74"), $wewsywccwwomowkw, $xgwukwqqaseqagay); } else { $wewsywccwwomowkw = $xgwukwqqaseqagay; } return $wewsywccwwomowkw; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\142\x74\156\x20\142\x74\156\x2d\154\147\40\x62\x67\x2d\160\x72\151\155\141\x72\171\55\163\145\x63\x6f\156\x64\141\162\171\x20\x74\x65\170\164\x2d\x77\x68\151\164\145\x20\160\170\x2d\70\40{$egkyssmuqcwaciya}"); } public function guquooskwgqcmiyw() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !$cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc(); } }
