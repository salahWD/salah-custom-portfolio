<?php

return [
    'topchess' => [
        'images' => ['/images/portfolio-1.jpg'],
        'review_is_sample' => true,
        'stack' => ['HTML', 'CSS', 'JavaScript'],
        'en' => ['title' => 'TopChess', 'description' => 'A chess club landing page that introduces the club, its courses, and coaching, with a clear path to joining.', 'review' => 'Visitors can find the courses and see how to join right away.'],
        'ar' => ['title' => 'توب تشيس', 'description' => 'صفحة تعريفية لنادي شطرنج تعرض الدورات والتدريب وتسهّل الوصول إلى التسجيل.', 'review' => 'أصبح بإمكان الزوار العثور على الدورات ومعرفة طريقة الانضمام بسرعة.'],
    ],
    'my-wealthy-way' => [
        'images' => ['/images/portfolio-2.jpg'],
        'full_image' => '/my%20work/screencapture-mywalthyway-home-php-2023-02-08-01_52_37.jpg',
        'review_is_sample' => true,
        'case_study' => [
            'is_sample' => true,
            'en' => [
                'sections' => [
                    'Client expectations' => 'Give Arabic-speaking members one place to find training, compensation information, and the tasks they use each day.',
                    'Project implementation' => 'Built a member dashboard with a daily task list and dedicated pages for training, products, and compensation.',
                    'Technical challenges' => 'Long Arabic labels and mixed-direction product names made the dense dashboard harder to scan on small screens.',
                    'Technical solutions' => 'Used a right-to-left layout, isolated Latin product names, and placed daily tasks ahead of reference material in the mobile layout.',
                ],
                'results' => [
                    ['2', 'Clicks from sign-in to daily tasks, down from 4 in the demo flow'],
                    ['5/6', 'Demo participants who found the training page on their first try'],
                ],
            ],
            'ar' => [
                'sections' => [
                    'Client expectations' => 'أراد العميل أن يتمكن الأعضاء الناطقون بالعربية من الوصول إلى التدريب وخطة المكافآت والمهام اليومية من مكان واحد.',
                    'Project implementation' => 'أُنشئت لوحة للأعضاء تضم قائمة بالمهام اليومية وصفحات مخصصة للتدريب والمنتجات وخطة المكافآت.',
                    'Technical challenges' => 'صعّبت العناوين العربية الطويلة وأسماء المنتجات ثنائية الاتجاه قراءة لوحة التحكم على الشاشات الصغيرة.',
                    'Technical solutions' => 'استُخدم تخطيط من اليمين إلى اليسار مع عزل اتجاه أسماء المنتجات اللاتينية وتقديم المهام اليومية على المحتوى المرجعي في نسخة الهاتف.',
                ],
                'results' => [
                    ['2', 'نقرتان للوصول إلى المهام اليومية بعد تسجيل الدخول، مقابل أربع في المسار التجريبي'],
                    ['5/6', 'من المشاركين في الاختبار التجريبي عثروا على صفحة التدريب من المحاولة الأولى'],
                ],
            ],
        ],
        'stack' => ['PHP', 'MySQL', 'Bootstrap'],
        'en' => ['title' => 'My Wealthy Way', 'description' => 'An Arabic member portal that brings together product information, training, the compensation plan, and daily tasks.', 'review' => 'The new layout makes it easier for members to get to their daily tasks.'],
        'ar' => ['title' => 'ماي ويلثي واي', 'description' => 'بوابة أعضاء باللغة العربية تجمع معلومات المنتجات والتدريب وخطة المكافآت والمهام اليومية.', 'review' => 'يسهّل التصميم على الأعضاء الوصول إلى مهامهم اليومية.'],
    ],
    'bakahealth' => [
        'images' => ['/images/portfolio-3.jpg'],
        'review_is_sample' => true,
        'case_study' => [
            'is_sample' => true,
            'en' => [
                'sections' => [
                    'Client expectations' => 'Make featured wellness products easy to find and let visitors browse the rest of the catalog on their phones.',
                    'Project implementation' => 'Built an Arabic catalog with featured products on the homepage and a product grid grouped by category.',
                    'Technical challenges' => 'Product photos arrived in different aspect ratios, and full-size files slowed the first catalog view on mobile.',
                    'Technical solutions' => 'Used a consistent frame for thumbnails, served smaller images in the grid, and deferred images below the initial viewport.',
                ],
                'results' => [
                    ['−44%', 'Image bytes transferred on the demo catalog’s first load'],
                    ['8/10', 'Demo participants who opened the requested product in under 15 seconds'],
                ],
            ],
            'ar' => [
                'sections' => [
                    'Client expectations' => 'أراد العميل إبراز المنتجات الصحية المختارة وتسهيل تصفح بقية الكتالوج من الهاتف.',
                    'Project implementation' => 'أُنشئ كتالوج عربي يعرض المنتجات المختارة في الصفحة الرئيسية ويرتب بقية المنتجات حسب الفئة.',
                    'Technical challenges' => 'تفاوتت أبعاد صور المنتجات وزادت الصور كبيرة الحجم زمن تحميل الكتالوج لأول مرة على الهاتف.',
                    'Technical solutions' => 'وُحّد إطار الصور المصغرة واستُخدمت ملفات أصغر في شبكة المنتجات وأُجّل تحميل الصور الموجودة أسفل الجزء المرئي من الصفحة.',
                ],
                'results' => [
                    ['−44%', 'انخفاض حجم بيانات الصور المُحمّلة عند فتح الكتالوج التجريبي لأول مرة'],
                    ['8/10', 'من المشاركين في الاختبار التجريبي فتحوا المنتج المطلوب في أقل من 15 ثانية'],
                ],
            ],
        ],
        'stack' => ['PHP', 'MySQL', 'CSS'],
        'en' => ['title' => 'BakaHealth', 'description' => 'An Arabic wellness catalog that highlights featured products and helps visitors browse the wider range.', 'review' => 'The featured products are easy to spot, and the catalog is easy to browse.'],
        'ar' => ['title' => 'باكا هيلث', 'description' => 'كتالوج عربي لمنتجات العافية يبرز المنتجات المختارة ويسهّل تصفح المجموعة الكاملة.', 'review' => 'يمكن العثور على المنتجات المختارة بسهولة، وتصفح الكتالوج أصبح أوضح.'],
    ],
    'graphic-designer-portfolio' => [
        'images' => ['/images/portfolio-4.jpg'],
        'review_is_sample' => true,
        'stack' => ['HTML', 'CSS', 'JavaScript'],
        'en' => ['title' => 'Graphic Designer Portfolio', 'description' => 'A personal site with a portrait-led homepage, an about section, a portfolio, and a direct contact link.', 'review' => 'The homepage introduces my work and gives visitors a clear way to get in touch.'],
        'ar' => ['title' => 'معرض أعمال مصمم جرافيك', 'description' => 'موقع شخصي يتضمن صورة في الصفحة الرئيسية ونبذة ومعرض أعمال ورابطاً مباشراً للتواصل.', 'review' => 'تعرّف الصفحة الرئيسية الزوار بأعمالي وتمنحهم طريقة واضحة للتواصل معي.'],
    ],
    'smart-step' => [
        'images' => ['/images/portfolio-5.jpg'],
        'review_is_sample' => true,
        'stack' => ['PHP', 'CSS', 'YouTube Embed'],
        'en' => ['title' => 'Smart Step', 'description' => 'An Arabic introduction to the DXN program that pairs an explanatory video with a registration link.', 'review' => 'The video and registration link give newcomers a clear starting point.'],
        'ar' => ['title' => 'سمارت ستيب', 'description' => 'صفحة عربية للتعريف ببرنامج DXN تجمع بين فيديو توضيحي ورابط للتسجيل.', 'review' => 'يمنح الفيديو ورابط التسجيل الزوار الجدد نقطة بداية واضحة.'],
    ],
    'web-and-software-studio' => [
        'images' => ['/images/portfolio-6.jpg'],
        'review_is_sample' => true,
        'stack' => ['HTML', 'CSS', 'JavaScript'],
        'en' => ['title' => 'Web and Software Studio', 'description' => 'A Portuguese-language studio site that presents web development and software services alongside projects and contact information.', 'review' => 'The homepage makes our services and past projects easy to find.'],
        'ar' => ['title' => 'استوديو الويب والبرمجيات', 'description' => 'موقع لاستوديو باللغة البرتغالية يعرض خدمات تطوير الويب والبرمجيات إلى جانب المشاريع ومعلومات التواصل.', 'review' => 'تسهّل الصفحة الرئيسية الوصول إلى خدماتنا ومشاريعنا السابقة.'],
    ],
];
