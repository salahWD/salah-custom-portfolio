<?php
declare(strict_types=1);

foreach ($form as $key => $_) {
    $value = $_POST[$key] ?? '';
    $form[$key] = is_string($value) ? trim($value) : '';
}
$csrf = $_POST['csrf'] ?? '';
if (!is_string($csrf) || !hash_equals($_SESSION['csrf'], $csrf)) {
    $formErrors['general'] = t('Your session expired. Please refresh the page and try again.', 'انتهت جلستك. يرجى تحديث الصفحة والمحاولة مجدداً.');
    http_response_code(419);
}
if (!is_string($_POST['website'] ?? '') || ($_POST['website'] ?? '') !== '') {
    $formErrors['general'] = t('The form could not be submitted. Please use the email link.', 'تعذر إرسال النموذج. يرجى استخدام رابط البريد الإلكتروني.');
    http_response_code(422);
}
if (text_length($form['name']) < 2 || text_length($form['name']) > 160) $formErrors['name'] = t('Please enter your name (2–160 characters).', 'يرجى إدخال اسمك (بين حرفين و160 حرفاً).');
$validContact = filter_var($form['contact'], FILTER_VALIDATE_EMAIL) ||
    (strlen($form['contact']) >= 6 && strlen($form['contact']) <= 40 && preg_match('/^\+?[0-9 ()-]+$/D', $form['contact']));
if (!$validContact || strlen($form['contact']) > 254) $formErrors['contact'] = t('Enter a valid email address or phone number.', 'أدخل بريداً إلكترونياً أو رقم هاتف صحيحاً.');
if (text_length($form['message']) < 10 || text_length($form['message']) > 1500) $formErrors['message'] = t('Tell me a little about your project (10–1,500 characters).', 'أخبرني قليلاً عن مشروعك (بين 10 و1,500 حرف).');
if (!$formErrors) {
    $envFile = __DIR__ . '/../.env';
    $env = is_file($envFile) ? @parse_ini_file($envFile, false, INI_SCANNER_RAW) : [];
    $token = getenv('API_TOKEN') ?: ($env['API_TOKEN'] ?? '');
    $chatId = getenv('CHAT_ID') ?: ($env['CHAT_ID'] ?? '');
    if (!$token || !$chatId) {
        $subject = 'Portfolio project enquiry — ' . $form['name'];
        $body = "Name: " . $form['name'] . "\nReply to: " . $form['contact'] . "\n\n" . $form['message'];
        $emailDraft = 'mailto:salahbakhash@gmail.com?subject=' . rawurlencode($subject) . '&body=' . rawurlencode($body);
        $formStatus = t('Your email draft is ready. Open your email app and send it to complete your enquiry.', 'مسودة بريدك جاهزة. افتح تطبيق البريد وأرسلها لإكمال استفسارك.');
    } elseif (isset($_SESSION['last_message_at']) && time() - $_SESSION['last_message_at'] < 60) {
        http_response_code(429);
        $formErrors['general'] = t('Please wait a minute before sending another message, or email me directly.', 'يرجى الانتظار دقيقة قبل إرسال رسالة أخرى، أو مراسلتي بالبريد مباشرة.');
    } else {
        $_SESSION['last_message_at'] = time();
        $payload = http_build_query(['chat_id' => $chatId, 'text' => "Portfolio enquiry\nName: " . $form['name'] . "\nContact: " . $form['contact'] . "\n\n" . $form['message']]);
        $context = stream_context_create(['http' => ['method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 'content' => $payload, 'timeout' => 10, 'ignore_errors' => true], 'ssl' => ['verify_peer' => true, 'verify_peer_name' => true]]);
        $response = @file_get_contents('https://api.telegram.org/bot' . $token . '/sendMessage', false, $context);
        $result = is_string($response) ? json_decode($response, true) : null;
        if (is_array($result) && ($result['ok'] ?? false) === true) {
            $_SESSION['message_sent'] = true;
            $_SESSION['csrf'] = bin2hex(random_bytes(32));
            header('Location: ' . site_url('contact') . '#contact-form', true, 303);
            exit;
        }
        http_response_code(502);
        $formErrors['general'] = t('Your message could not be delivered. Please try email or WhatsApp below.', 'تعذر تسليم رسالتك. يرجى استخدام البريد الإلكتروني أو واتساب أدناه.');
    }
}
if ($formErrors && http_response_code() === 200) http_response_code(422);
