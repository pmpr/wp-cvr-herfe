<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f864c3e9e             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Herfe; use Pmpr\Common\Foundation\Interfaces\Constants; class Comment extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('render_comments', [$this, 'render']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('comment_form_fields', [$this, 'yceyooiweyiqgsam'], 99)->cecaguuoecmccuse('comment_form_fields', [$this, 'wccaswoeyuigssus'], 999)->cecaguuoecmccuse('comment_reply_link', [$this, 'qqsuqkomssgcoqka'], 999)->cecaguuoecmccuse('cancel_comment_reply_link', [$this, 'qqsuqkomssgcoqka'], 999); $this->aqaqisyssqeomwom('can_add_rating', '__return_false', 99)->aqaqisyssqeomwom('comment_ajaxify', '__return_false', 99)->aqaqisyssqeomwom('comment_form_html', [$this, 'wqmqwcqqkcuewecw'], 99)->aqaqisyssqeomwom('comment_form_args', [$this, 'iywqeugamcceukaa'], 99)->aqaqisyssqeomwom('comment_avatar_size', [$this, 'eyosseqakkugagcm'], 99, 2); parent::kgquecmsgcouyaya(); } public function qqsuqkomssgcoqka($iwywmkygwewiamwm) { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($smuykqsageuocuos->has($iwywmkygwewiamwm, 'a')) { $iwywmkygwewiamwm = $smuykqsageuocuos->igmaewykumgwoaoy($iwywmkygwewiamwm, ['a' => ['class' => 'text-primary-secondary']]); } return $iwywmkygwewiamwm; } public function wccaswoeyuigssus($ikgwqyuyckaewsow) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ikgwqyuyckaewsow, ['url', 'cookies']); return $ikgwqyuyckaewsow; } public function render() { if (!$this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ugcgywasgqgaysek()) { $this->ewcsyqaaigkicgse('comment_form_and_list_render', ['is_render' => true, 'has_rating' => false, Constants::ayscagukkeoucmoe => false]); } } public function eyosseqakkugagcm($oiegiwogmwmawkeo, $cuyooiakswegosog = true) { return 64; } public function wqmqwcqqkcuewecw($nsmgceoqaqogqmuw) { $siquossayskcwkea = ['textarea' => ['rows' => '5'], '.required-field-message' => ['class' => 'sr-only'], 'label:not(.rating-label)' => ['class' => 'sr-only'], 'p' => ['class' => 'form-group col-12 mb-5'], 'p:not(.form-submit):not(.comment-form-comment):not(.logged-in-as)' => ['class' => 'col-sm-6'], 'a' => ['class' => 'text-secondary-gray'], 'input:not([type="checkbox"]):not([type="submit"]), textarea' => ['class' => 'form-control']]; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $nsmgceoqaqogqmuw = $smuykqsageuocuos->mosawwqeoikikcuo($nsmgceoqaqogqmuw, 'div.recaptcha', ['class' => 'force-to-end']); $siquossayskcwkea['.comment-form-comment'] = ['class' => 'col-12']; } return $smuykqsageuocuos->igmaewykumgwoaoy($nsmgceoqaqogqmuw, $siquossayskcwkea); } public function yceyooiweyiqgsam($ikgwqyuyckaewsow) { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (Constants::COMMENT === $ymqmyyeuycgmigyo) { $pkyyagewkiyckmwy = __('Write Comment', PR__CVR__HERFE); } else { $pkyyagewkiyckmwy = $smuykqsageuocuos->qqimkcgcmeewwwei($aiowsaccomcoikus, "label[for=\"{$ymqmyyeuycgmigyo}\"]", true); } $siquossayskcwkea = ['p input[type="text"], input[type="email"], p textarea' => ['placeholder' => $pkyyagewkiyckmwy]]; switch ($ymqmyyeuycgmigyo) { case 'comment': $aiowsaccomcoikus = $smuykqsageuocuos->ogaeogwycyqqckeu($aiowsaccomcoikus, ['#comment' => ['cols', 'rows']]); break; case 'cookies': $aiowsaccomcoikus = $smuykqsageuocuos->yqmasmmquoocswuw($aiowsaccomcoikus, 'label', __('Save my name and email.', PR__CVR__HERFE), false); $ugugagoguiycqeys = ['input' => ['class' => 'custom-control-input'], 'p' => ['class' => 'custom-control custom-checkbox mb-3'], 'label' => ['class' => 'custom-control-label mb-0']]; break; default: $ugugagoguiycqeys = ['#email' => ['class' => 'direction-ltr-force']]; } if (isset($ugugagoguiycqeys)) { $siquossayskcwkea = array_merge($siquossayskcwkea, $ugugagoguiycqeys); } $aiowsaccomcoikus = $smuykqsageuocuos->igmaewykumgwoaoy($aiowsaccomcoikus, $siquossayskcwkea); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; } return $ikgwqyuyckaewsow; } public function iywqeugamcceukaa($ywmkwiwkosakssii = []) : array { return array_merge($ywmkwiwkosakssii, ['class_form' => 'row', 'collapsible' => false, 'title_reply' => __('Leave a Comment', PR__CVR__HERFE), 'class_submit' => 'main-action', 'title_reply_before' => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('h3', ['id' => 'reply-title', 'class' => 'comment-reply-title mb-4 fs-sm']), 'title_reply_after' => '</h3>']); } }
