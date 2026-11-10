<?php
$envFile = __DIR__ . '/../.env';
$contactEnv = is_file($envFile) ? @parse_ini_file($envFile, false, INI_SCANNER_RAW) : [];
$directDelivery = (getenv('API_TOKEN') ?: ($contactEnv['API_TOKEN'] ?? '')) && (getenv('CHAT_ID') ?: ($contactEnv['CHAT_ID'] ?? ''));
if (!empty($_SESSION['message_sent'])) {
    $formStatus = t('Your message has been sent. Thank you for getting in touch.', 'أُرسلت رسالتك. شكراً لتواصلك.');
    unset($_SESSION['message_sent']);
}
?>
<main id="main" class="container contact-page">
  <a class="breadcrumb" href="<?= e(site_url()) ?>"><?= e(t('Home', 'الرئيسية')) ?></a>
  <div class="contact-layout">
    <div class="contact-copy"><p class="eyebrow"><?= e(t('LET’S MAKE SOMETHING USEFUL', 'لنبنِ شيئاً مفيداً')) ?></p><h1><?= t('A good idea<br>starts with<br><em>a hello.</em>', 'كل فكرة جميلة<br>تبدأ بكلمة<br><em>مرحباً.</em>') ?></h1><p><?= e(t('A new website, an app, or a process that needs a better way? Tell me what you have in mind.', 'موقع جديد أو تطبيق أو عملية تحتاج إلى تحسين؟ أخبرني بما تفكر فيه.')) ?></p>
    <div class="contact-methods"><a href="mailto:salahbakhash@gmail.com"><span class="eyebrow"><?= e(t('EMAIL ME', 'راسلني بالبريد')) ?></span><strong dir="ltr">salahbakhash@gmail.com</strong><?= external_arrow() ?></a><a href="https://api.whatsapp.com/send?phone=905527188570" target="_blank" rel="noopener noreferrer"><span class="eyebrow">WHATSAPP</span><strong><?= e(t('Start a conversation', 'ابدأ محادثة')) ?></strong><?= external_arrow() ?></a><a href="tel:+905527188570"><span class="eyebrow"><?= e(t('CALL', 'اتصل بي')) ?></span><strong dir="ltr">+90 552 718 85 70</strong><?= external_arrow() ?></a></div>
    <a class="text-link" href="/media/salah-cv.pdf" download="Salah-Bakhash-CV.pdf"><?= e(t('Looking for my CV?', 'تبحث عن سيرتي الذاتية؟')) ?> <span aria-hidden="true">↓</span></a></div>
    <div class="contact-form-panel">
      <h2><?= e(t('Tell me about your project', 'أخبرني عن مشروعك')) ?></h2>
      <p class="form-intro"><?= e($directDelivery ? t('Leave your details and a little context. I’ll get back to you.', 'اترك بياناتك وبعض التفاصيل لأتواصل معك.') : t('Fill in a short brief, then send it from your email app.', 'املأ نبذة قصيرة ثم أرسلها من تطبيق البريد الإلكتروني.')) ?></p>
      <?php if ($formErrors): ?><div class="form-notice error-notice" role="alert" tabindex="-1"><strong><?= e(t('Please check your details.', 'يرجى مراجعة البيانات.')) ?></strong><ul><?php foreach ($formErrors as $key => $error): ?><li><?php if ($key !== 'general'): ?><a href="#field-<?= e($key) ?>"><?= e($error) ?></a><?php else: ?><?= e($error) ?><?php endif ?></li><?php endforeach ?></ul></div><?php endif ?>
      <?php if ($formStatus): ?><div id="form-result" class="form-notice" role="status" tabindex="-1"><p><?= e($formStatus) ?></p><?php if ($emailDraft): ?><a class="button" href="<?= e($emailDraft) ?>"><?= e(t('Open email draft', 'افتح مسودة البريد')) ?> <?= external_arrow() ?></a><?php endif ?></div><?php endif ?>
      <form id="contact-form" action="<?= e(site_url('contact')) ?>#contact-form" method="post">
        <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
        <div class="honeypot" aria-hidden="true"><label for="website">Website</label><input id="website" name="website" type="text" tabindex="-1" autocomplete="off"></div>
        <div class="form-field"><label for="field-name"><?= e(t('Your name', 'اسمك')) ?> <span aria-hidden="true">*</span></label><input id="field-name" name="name" autocomplete="name" required minlength="2" maxlength="160" value="<?= e($form['name']) ?>" placeholder="<?= e(t('What should I call you?', 'بماذا أناديك؟')) ?>" <?= isset($formErrors['name']) ? 'aria-invalid="true" aria-describedby="error-name"' : '' ?>><?php if (isset($formErrors['name'])): ?><span class="field-error" id="error-name"><?= e($formErrors['name']) ?></span><?php endif ?></div>
        <div class="form-field"><label for="field-contact"><?= e(t('Email or phone number', 'البريد الإلكتروني أو رقم الهاتف')) ?> <span aria-hidden="true">*</span></label><input id="field-contact" name="contact" autocomplete="email" required maxlength="254" dir="auto" value="<?= e($form['contact']) ?>" placeholder="you@example.com" <?= isset($formErrors['contact']) ? 'aria-invalid="true" aria-describedby="error-contact"' : '' ?>><?php if (isset($formErrors['contact'])): ?><span class="field-error" id="error-contact"><?= e($formErrors['contact']) ?></span><?php endif ?></div>
        <div class="form-field"><label for="field-message"><?= e(t('What would you like to build?', 'ما الذي تريد بناءه؟')) ?> <span aria-hidden="true">*</span></label><textarea id="field-message" name="message" rows="5" required minlength="10" maxlength="1500" placeholder="<?= e(t('The idea, the challenge, and any timeline you have in mind…', 'الفكرة والتحدي والمدة المتوقعة…')) ?>" <?= isset($formErrors['message']) ? 'aria-invalid="true" aria-describedby="error-message"' : '' ?>><?= e($form['message']) ?></textarea><?php if (isset($formErrors['message'])): ?><span class="field-error" id="error-message"><?= e($formErrors['message']) ?></span><?php endif ?></div>
        <button type="submit" class="button form-submit"><?= e($directDelivery ? t('Send message', 'إرسال الرسالة') : t('Prepare email draft', 'تجهيز مسودة بريد')) ?> <?= arrow() ?></button>
        <p class="form-footnote"><?= e($directDelivery ? t('Your details are used to reply to your enquiry.', 'تُستخدم بياناتك للرد على استفسارك.') : t('This prepares a draft. Your message is sent only when you send it in your email app.', 'هذا الإجراء يجهز مسودة فقط. تُرسل رسالتك عند إرسالها من تطبيق البريد.')) ?></p>
      </form>
    </div>
  </div>
</main>
