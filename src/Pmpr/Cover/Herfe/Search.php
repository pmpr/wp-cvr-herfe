<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f864c3e9e             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Form; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Search extends Container { private ?string $formDescription = null; public function wigskegsqequoeks() { $this->waqewsckuayqguos('after_header_search_box_form', [$this, 'oyuawqwyoqgoawoo'], 8)->waqewsckuayqguos('after_header_search_box_form', [$this, 'skuwqeqoosmeowmo'], 9); } public function oyuawqwyoqgoawoo() { if ($this->formDescription) { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($this->formDescription, ['class' => 'my-3 font-weight-bold text-white']); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_footer', [$this, 'owuuwwekuaswiuos'], 99); $this->aqaqisyssqeomwom('search_form_object', [$this, 'qiiyiosewcgwegei']); } public function skuwqeqoosmeowmo() { $omiygkiiauwgkegg = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi(['class' => 'mx-auto', Constants::igssuqwuicwawgam => 'white']); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $tsuauommsquiesmk = $swqimwqeweekeusq->iaaacsuskiakkwui('', ['class' => 'd-flex flex-wrap justify-content-center mega-tag-filter mb-5']); $suuagcecoyuweoqk = $swqimwqeweekeusq->iaaacsuskiakkwui('', ['class' => 'mega-tag-list']); echo $swqimwqeweekeusq->iaaacsuskiakkwui($omiygkiiauwgkegg . $tsuauommsquiesmk . $suuagcecoyuweoqk, ['class' => 'mega-tag-container custom-scrollbar']); } public function uameceywasgkosya($qwcmueausqgiwigy, $iwewcwusemqaiggk) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($qwcmueausqgiwigy && $mumyimcwkaemyyue->gouusicsisumuiei() && !$mumyimcwkaemyyue->goecwaaykqoaaagg()) { $eyyicwuomioiwoeu = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $_or = ' OR '; $yuqasiiaeqsysoig = ''; $kuguwoaesuqsqysu = [Constants::iwascisiiokuackw, Constants::qsskmqwcucisywqy]; foreach ($kuguwoaesuqsqysu as $gwiwsycaaqgwmewg) { $yuqasiiaeqsysoig .= $eyyicwuomioiwoeu->prepare('(aspm.meta_key = %s AND aspm.meta_value LIKE %s)', $gwiwsycaaqgwmewg, $iwewcwusemqaiggk); if (Constants::iwascisiiokuackw === $gwiwsycaaqgwmewg) { $yuqasiiaeqsysoig .= $_or; } } if ($yuqasiiaeqsysoig) { $qwcmueausqgiwigy .= $_or . $yuqasiiaeqsysoig; $this->cecaguuoecmccuse('posts_join_request', [$this, 'kgyoyiqqocumcuka']); } } return $qwcmueausqgiwigy; } public function kgyoyiqqocumcuka($eagqsqeocaokmsim) : string { global $wpdb; $eagqsqeocaokmsim .= sprintf(" LEFT JOIN %s aspm ON (%s.ID = aspm.post_id) ", $wpdb->postmeta, $wpdb->posts); return $eagqsqeocaokmsim; } public function owuuwwekuaswiuos() { if ($this->wkiaeewoqmsougim(Customizer::csgaiqckoquqkkgy)) { $this->iuygowkemiiwqmiw('header/search', [Constants::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, Constants::moacsmsigegyweoc => $this->wkiaeewoqmsougim(Customizer::skaayygqwsksckau)], [Constants::qaacaqioeyiuakeu => true]); } } public function qiiyiosewcgwegei($eaoumsseceiowgsk) { if ($eaoumsseceiowgsk instanceof Form) { $eaoumsseceiowgsk->qigsyyqgewgskemg('search-form d-flex mb-3'); $eaoumsseceiowgsk->iesuwqcaeswgqeqk(Constants::uouymeyqasaeckso); foreach ($eaoumsseceiowgsk->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { $aiowsaccomcoikus->kakecegieeqyyayu()->mykogkuaqwmycgog('form-group'); switch ($aiowsaccomcoikus->mwikyscisascoeea()) { case Constants::mgsccwumkcawaqcy: $aiowsaccomcoikus->macygmcekgqwmcwk(); break; case 'search_input': $aiowsaccomcoikus->saemoowcasogykak($this->wkiaeewoqmsougim(Customizer::wyaogyossyggkwmy))->gswweykyogmsyawy(__('Search ...', PR__CVR__HERFE))->macygmcekgqwmcwk()->kakecegieeqyyayu()->qigsyyqgewgskemg('w-100 text-white font-weight-bold'); if ($ukwokcuqauuosmoo = $aiowsaccomcoikus->meqceykmywmqgoym()) { $this->formDescription = $ukwokcuqauuosmoo; $aiowsaccomcoikus->gucwmccyimoagwcm(''); } break; case 'search_submit': $wkaqekwwgqsqwcoi = $this->wkiaeewoqmsougim(Customizer::wyaogyossyggkwmy, IconInterface::ymyiywwagwqmmuuk); $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => 'icon-white my-auto'], [Constants::kicoscymgmgqeqgy => 1]); $aiowsaccomcoikus->gswweykyogmsyawy($wkaqekwwgqsqwcoi)->qigsyyqgewgskemg('ml-2 ml-md-4 bg-primary-secondary'); break; } } } return $eaoumsseceiowgsk; } }
