<?php
// Public portfolio facts. Source mapping and unresolved facts are in CONTENT_COVERAGE.md.
$projects = json_decode(<<<'PROJECTS_JSON'
{
  "runners-erp": {
    "title": {
      "en": "Runners ERP",
      "ar": "نظام Runners ERP"
    },
    "category": "systems",
    "art": "erp",
    "context": {
      "en": "Client project",
      "ar": "مشروع عميل"
    },
    "tags": [
      "ERP",
      "Business workflows"
    ],
    "summary": {
      "en": "A bespoke ERP system built around the way a Lebanese business operates.",
      "ar": "نظام لتخطيط موارد المؤسسة، مصمم لدعم العمليات الداخلية لشركة في لبنان."
    },
    "purpose": {
      "en": "Support Runners’ internal business operations and workflows with a dedicated software system.",
      "ar": "دعم عمليات شركة Runners الداخلية وسير العمل من خلال نظام برمجي مخصص."
    },
    "role": {
      "en": "I developed the bespoke ERP system for Runners.",
      "ar": "طورت نظام ERP مخصصاً لشركة Runners."
    },
    "delivered": [
      {
        "en": "A custom ERP system for internal business operations.",
        "ar": "نظام ERP مخصص للعمليات الداخلية."
      },
      {
        "en": "Business workflows implemented in a purpose-built application.",
        "ar": "تطبيق سير عمل الأعمال ضمن نظام مصمم لهذا الغرض."
      }
    ],
    "outcome": {
      "en": "Delivered a bespoke business system for Runners in Lebanon.",
      "ar": "تطوير نظام أعمال مخصص لشركة Runners في لبنان."
    },
    "scope": {
      "en": "Custom business software",
      "ar": "برمجيات أعمال مخصصة"
    },
    "category_label": {
      "en": "Business systems",
      "ar": "أنظمة الأعمال"
    }
  },
  "dxn-calculator": {
    "title": {
      "en": "DXN Türkiye calculator",
      "ar": "حاسبة DXN تركيا"
    },
    "category": "mobile",
    "art": "mobile",
    "context": {
      "en": "Client project",
      "ar": "مشروع عميل"
    },
    "tags": [
      "React Native",
      "Expo",
      "Google Play"
    ],
    "summary": {
      "en": "A published Turkish DXN calculator with 10,000+ downloads on Google Play.",
      "ar": "حاسبة DXN للسوق التركي، منشورة على Google Play بأكثر من 10,000 تنزيل."
    },
    "purpose": {
      "en": "Bring DXN calculations to a mobile application for the Turkish market.",
      "ar": "توفير حسابات DXN من خلال تطبيق جوال للسوق التركي."
    },
    "role": {
      "en": "I built the calculator using React Native and Expo.",
      "ar": "طورت الحاسبة باستخدام React Native وExpo."
    },
    "delivered": [
      {
        "en": "A Turkish DXN calculator mobile application.",
        "ar": "تطبيق جوال لحسابات DXN باللغة التركية."
      },
      {
        "en": "A published application built with React Native and Expo.",
        "ar": "تطبيق منشور مبني باستخدام React Native وExpo."
      }
    ],
    "outcome": {
      "en": "Published on Google Play and reached 10,000+ downloads, as recorded in my latest CV.",
      "ar": "نُشر التطبيق على Google Play ووصل إلى أكثر من 10,000 تنزيل وفق السيرة الذاتية الأحدث."
    },
    "scope": {
      "en": "Published mobile application",
      "ar": "تطبيق جوال منشور"
    },
    "category_label": {
      "en": "Mobile applications",
      "ar": "تطبيقات الجوال"
    }
  },
  "musaaid-quiz-platform": {
    "title": {
      "en": "musaaid.ai",
      "ar": "musaaid.ai"
    },
    "category": "web",
    "art": "quiz",
    "context": {
      "en": "Freelance project",
      "ar": "مشروع مستقل"
    },
    "tags": [
      "API integrations",
      "Marketing",
      "Quiz platform"
    ],
    "summary": {
      "en": "A custom quiz platform connecting marketing and sales tools in one web experience.",
      "ar": "منصة اختبارات مخصصة تربط أدوات التسويق والمبيعات ضمن تجربة ويب واحدة."
    },
    "purpose": {
      "en": "Connect a custom marketing and sales quiz experience with the tools used to reach and understand customers.",
      "ar": "ربط تجربة اختبارات تسويقية مخصصة بأدوات الوصول إلى العملاء وفهمهم."
    },
    "role": {
      "en": "I developed the custom web platform and its third-party integrations.",
      "ar": "طورت منصة الويب المخصصة وتكاملاتها مع خدمات خارجية."
    },
    "delivered": [
      {
        "en": "A custom marketing and sales quiz platform.",
        "ar": "منصة اختبارات مخصصة للتسويق والمبيعات."
      },
      {
        "en": "ActiveCampaign and GetResponse integrations.",
        "ar": "تكاملات مع ActiveCampaign وGetResponse."
      },
      {
        "en": "Google Tag Manager, Meta Pixel, Snapchat Pixel, TikTok Pixel, and Google Ads integrations.",
        "ar": "تكاملات مع Google Tag Manager وMeta Pixel وSnapchat Pixel وTikTok Pixel وGoogle Ads."
      }
    ],
    "outcome": {
      "en": "Delivered a quiz platform connected to email marketing and advertising services.",
      "ar": "تطوير منصة اختبارات متصلة بخدمات التسويق بالبريد الإلكتروني والإعلانات."
    },
    "scope": {
      "en": "Web platform & integrations",
      "ar": "منصة ويب وتكاملات"
    },
    "category_label": {
      "en": "Web development",
      "ar": "تطوير الويب"
    }
  },
  "hashnet-cms": {
    "title": {
      "en": "HashNet modular CMS",
      "ar": "نظام HashNet لإدارة المحتوى"
    },
    "category": "systems",
    "art": "cms",
    "context": {
      "en": "Employment project",
      "ar": "ضمن وظيفة"
    },
    "tags": [
      "PHP",
      "MySQL",
      "CMS"
    ],
    "summary": {
      "en": "Reusable content blocks that bring structure to custom website development.",
      "ar": "وحدات محتوى قابلة لإعادة الاستخدام لتنظيم تطوير المواقع المخصصة."
    },
    "purpose": {
      "en": "Create a reusable foundation for developing content-driven websites at HashNet.",
      "ar": "بناء أساس قابل لإعادة الاستخدام لتطوير مواقع تعتمد على المحتوى لدى HashNet."
    },
    "role": {
      "en": "As a part-time full-stack developer at HashNet, I built a custom PHP/MySQL content management system.",
      "ar": "بصفتي مطور ويب متكاملاً بدوام جزئي في HashNet، بنيت نظام إدارة محتوى مخصصاً باستخدام PHP وMySQL."
    },
    "delivered": [
      {
        "en": "A folder-based, reusable content-block structure.",
        "ar": "بنية وحدات محتوى قائمة على المجلدات وقابلة لإعادة الاستخدام."
      },
      {
        "en": "Blocks for articles, portfolios, and testimonials.",
        "ar": "وحدات للمقالات والأعمال والتقييمات."
      },
      {
        "en": "Authentication and category functionality.",
        "ar": "وظائف المصادقة والتصنيفات."
      }
    ],
    "outcome": {
      "en": "Delivered a modular CMS with reusable building blocks for custom websites.",
      "ar": "تطوير نظام إدارة محتوى معياري بوحدات قابلة لإعادة الاستخدام في المواقع المخصصة."
    },
    "scope": {
      "en": "Content management system",
      "ar": "نظام إدارة محتوى"
    },
    "period": "2023–2024",
    "category_label": {
      "en": "Business systems",
      "ar": "أنظمة الأعمال"
    }
  },
  "dxn-deposits": {
    "title": {
      "en": "DXN branch management",
      "ar": "إدارة فروع DXN"
    },
    "category": "mobile",
    "art": "mobile",
    "context": {
      "en": "Client project",
      "ar": "مشروع عميل"
    },
    "tags": [
      "React Native",
      "Expo",
      "Business tools"
    ],
    "summary": {
      "en": "A published mobile app for deposits, orders, account balances, and administrator workflows.",
      "ar": "تطبيق جوال منشور لإدارة الإيداعات والطلبات وأرصدة الحسابات وعمليات المسؤولين."
    },
    "purpose": {
      "en": "Support the deposit and account-management workflows of a DXN branch.",
      "ar": "دعم عمليات الإيداع وإدارة الحسابات في أحد فروع DXN."
    },
    "role": {
      "en": "I built the branch deposit-management application using React Native and Expo.",
      "ar": "طورت تطبيق إدارة إيداعات الفرع باستخدام React Native وExpo."
    },
    "delivered": [
      {
        "en": "Deposit and order workflows.",
        "ar": "عمليات الإيداع والطلبات."
      },
      {
        "en": "Account balances and administrator workflows.",
        "ar": "أرصدة الحسابات وعمليات المسؤولين."
      }
    ],
    "outcome": {
      "en": "Delivered a published application supporting branch deposit management.",
      "ar": "تطوير تطبيق منشور لدعم إدارة إيداعات الفرع."
    },
    "scope": {
      "en": "Published mobile application",
      "ar": "تطبيق جوال منشور"
    },
    "category_label": {
      "en": "Mobile applications",
      "ar": "تطبيقات الجوال"
    }
  },
  "mafatih-al-rizq": {
    "title": {
      "en": "Mafatih Al Rizq",
      "ar": "مفاتيح الرزق"
    },
    "category": "mobile",
    "art": "flutter",
    "context": {
      "en": "Employment project",
      "ar": "ضمن وظيفة"
    },
    "tags": [
      "Flutter",
      "Dart",
      "Cross-platform"
    ],
    "summary": {
      "en": "A cross-platform Flutter application developed at Coredex Solutions.",
      "ar": "تطبيق متعدد المنصات باستخدام Flutter، طُوّر ضمن العمل في Coredex Solutions."
    },
    "purpose": {
      "en": "Deliver a cross-platform mobile application as part of my role at Coredex Solutions.",
      "ar": "تطوير تطبيق جوال متعدد المنصات ضمن دوري في Coredex Solutions."
    },
    "role": {
      "en": "I developed Mafatih Al Rizq using Flutter.",
      "ar": "طورت تطبيق مفاتيح الرزق باستخدام Flutter."
    },
    "delivered": [
      {
        "en": "A cross-platform mobile application.",
        "ar": "تطبيق جوال متعدد المنصات."
      },
      {
        "en": "Application development using Flutter and Dart.",
        "ar": "تطوير التطبيق باستخدام Flutter وDart."
      }
    ],
    "outcome": {
      "en": "Developed the application at Coredex Solutions. A public release link is not listed here.",
      "ar": "تطوير التطبيق في Coredex Solutions. لا يتوفر رابط إصدار عام هنا."
    },
    "scope": {
      "en": "Cross-platform mobile development",
      "ar": "تطوير تطبيقات متعددة المنصات"
    },
    "category_label": {
      "en": "Mobile applications",
      "ar": "تطبيقات الجوال"
    }
  },
  "adeco-website": {
    "title": {
      "en": "ADECO corporate website",
      "ar": "موقع ADECO"
    },
    "category": "web",
    "art": "web",
    "context": {
      "en": "With Mewal",
      "ar": "بالتعاون مع Mewal"
    },
    "tags": [
      "Corporate website",
      "Client collaboration"
    ],
    "summary": {
      "en": "A Saudi business website developed in collaboration with Mewal.",
      "ar": "موقع لشركة سعودية، طُوّر بالتعاون مع Mewal."
    },
    "purpose": {
      "en": "Build a business-oriented web presence for ADECO in Saudi Arabia.",
      "ar": "بناء حضور على الويب لشركة ADECO في السعودية."
    },
    "role": {
      "en": "I developed the website in collaboration with Mewal, working with business content and customer requirements.",
      "ar": "طورت الموقع بالتعاون مع Mewal، مع العمل على محتوى الشركة ومتطلبات العميل."
    },
    "delivered": [
      {
        "en": "A corporate website for ADECO.",
        "ar": "موقع تعريفي لشركة ADECO."
      },
      {
        "en": "Implementation of business content and customer requirements.",
        "ar": "تنفيذ محتوى الأعمال ومتطلبات العميل."
      }
    ],
    "outcome": {
      "en": "Delivered the ADECO corporate website in collaboration with Mewal.",
      "ar": "تطوير موقع ADECO بالتعاون مع Mewal."
    },
    "scope": {
      "en": "Corporate website",
      "ar": "موقع شركة"
    },
    "link": "https://adeco.meawal.sa/",
    "category_label": {
      "en": "Web development",
      "ar": "تطوير الويب"
    }
  },
  "mewal-business-website": {
    "title": {
      "en": "Mewal business website",
      "ar": "موقع أعمال بالتعاون مع Mewal"
    },
    "category": "web",
    "art": "web",
    "context": {
      "en": "With Mewal",
      "ar": "بالتعاون مع Mewal"
    },
    "tags": [
      "Business website",
      "Saudi Arabia"
    ],
    "summary": {
      "en": "A second company web presence delivered with Mewal for a Saudi business.",
      "ar": "موقع لشركة أخرى في السعودية، طُوّر بالتعاون مع Mewal."
    },
    "purpose": {
      "en": "Create a company web presence for a business in the Gulf.",
      "ar": "بناء حضور على الويب لشركة في الخليج."
    },
    "role": {
      "en": "I collaborated with Mewal on a second business website, working with business content and customer requirements.",
      "ar": "تعاونت مع Mewal على موقع أعمال آخر، مع العمل على محتوى الأعمال ومتطلبات العميل."
    },
    "delivered": [
      {
        "en": "A company website built around customer requirements.",
        "ar": "موقع شركة مبني وفق متطلبات العميل."
      }
    ],
    "outcome": {
      "en": "Delivered a second business website in collaboration with Mewal.",
      "ar": "تطوير موقع أعمال ثانٍ بالتعاون مع Mewal."
    },
    "scope": {
      "en": "Business website",
      "ar": "موقع أعمال"
    },
    "category_label": {
      "en": "Web development",
      "ar": "تطوير الويب"
    }
  },
  "wordpress-themes": {
    "title": {
      "en": "Custom WordPress themes",
      "ar": "قوالب WordPress مخصصة"
    },
    "category": "web",
    "art": "wordpress",
    "context": {
      "en": "Freelance project",
      "ar": "مشروع مستقل"
    },
    "tags": [
      "WordPress",
      "Custom themes",
      "Maintenance"
    ],
    "summary": {
      "en": "Custom themes and client websites, carried through development, handover, and support.",
      "ar": "قوالب ومواقع مخصصة، من التطوير والتسليم إلى الدعم الفني."
    },
    "purpose": {
      "en": "Deliver WordPress websites tailored to individual freelance clients.",
      "ar": "تطوير مواقع WordPress مخصصة لاحتياجات العملاء المستقلين."
    },
    "role": {
      "en": "I delivered five or more custom WordPress themes for freelance clients.",
      "ar": "طورت خمسة قوالب WordPress مخصصة أو أكثر لعملاء مستقلين."
    },
    "delivered": [
      {
        "en": "Custom WordPress themes for freelance clients.",
        "ar": "قوالب WordPress مخصصة لعملاء مستقلين."
      },
      {
        "en": "Client website delivery and technical support.",
        "ar": "تسليم مواقع العملاء وتقديم الدعم الفني."
      }
    ],
    "outcome": {
      "en": "Received 5-star feedback for these custom theme projects, as recorded in my latest CV.",
      "ar": "تلقيت تقييمات 5 نجوم على مشاريع القوالب المخصصة وفق السيرة الذاتية الأحدث."
    },
    "scope": {
      "en": "A collection of freelance projects",
      "ar": "مجموعة مشاريع مستقلة"
    },
    "category_label": {
      "en": "Web development",
      "ar": "تطوير الويب"
    }
  },
  "telegram-automation": {
    "title": {
      "en": "Telegram automation",
      "ar": "أتمتة Telegram"
    },
    "category": "automation",
    "art": "automation",
    "context": {
      "en": "Freelance project",
      "ar": "مشروع مستقل"
    },
    "tags": [
      "Telegram",
      "Automation",
      "Data collection"
    ],
    "summary": {
      "en": "Bots that handle automated responses and collect data through Telegram.",
      "ar": "بوتات للردود الآلية وجمع البيانات عبر Telegram."
    },
    "purpose": {
      "en": "Automate responses and data collection in Telegram.",
      "ar": "أتمتة الردود وجمع البيانات في Telegram."
    },
    "role": {
      "en": "I built Telegram automation bots for client workflows.",
      "ar": "طورت بوتات Telegram لأتمتة سير العمل."
    },
    "delivered": [
      {
        "en": "Automated response bots.",
        "ar": "بوتات رد آلي."
      },
      {
        "en": "Data-collection workflows through Telegram.",
        "ar": "عمليات جمع البيانات عبر Telegram."
      }
    ],
    "outcome": {
      "en": "Delivered Telegram bots for responses and data collection.",
      "ar": "تطوير بوتات Telegram للردود وجمع البيانات."
    },
    "scope": {
      "en": "Workflow automation",
      "ar": "أتمتة سير العمل"
    },
    "category_label": {
      "en": "Automation & integrations",
      "ar": "الأتمتة والتكاملات"
    }
  },
  "product-data-tools": {
    "title": {
      "en": "Product data extraction",
      "ar": "استخراج بيانات المنتجات"
    },
    "category": "automation",
    "art": "automation",
    "context": {
      "en": "Freelance project",
      "ar": "مشروع مستقل"
    },
    "tags": [
      "Data extraction",
      "E-commerce"
    ],
    "summary": {
      "en": "Approximately 1,000 clothing product records extracted for an online storefront.",
      "ar": "استخراج نحو 1,000 سجل لمنتجات ملابس لمتجر إلكتروني."
    },
    "purpose": {
      "en": "Provide product records for an online clothing storefront.",
      "ar": "توفير سجلات المنتجات لمتجر ملابس إلكتروني."
    },
    "role": {
      "en": "I extracted approximately 1,000 clothing product records.",
      "ar": "استخرجت نحو 1,000 سجل لمنتجات ملابس."
    },
    "delivered": [
      {
        "en": "Clothing product data extracted for an online storefront.",
        "ar": "بيانات منتجات ملابس مستخرجة لمتجر إلكتروني."
      }
    ],
    "outcome": {
      "en": "Extracted approximately 1,000 product records for the storefront.",
      "ar": "استخراج نحو 1,000 سجل منتجات للمتجر."
    },
    "scope": {
      "en": "Product data tooling",
      "ar": "أدوات بيانات المنتجات"
    },
    "category_label": {
      "en": "Automation & integrations",
      "ar": "الأتمتة والتكاملات"
    }
  },
  "coredex-website": {
    "title": {
      "en": "Coredex corporate website",
      "ar": "موقع Coredex Solutions"
    },
    "category": "web",
    "art": "web",
    "context": {
      "en": "Unpublished · Coredex",
      "ar": "غير منشور · Coredex"
    },
    "tags": [
      "Corporate website",
      "Unpublished"
    ],
    "summary": {
      "en": "A new corporate website developed for Coredex Solutions; not yet published.",
      "ar": "موقع تعريفي جديد لشركة Coredex Solutions، لم يُنشر بعد."
    },
    "purpose": {
      "en": "Develop a new corporate website for Coredex Solutions.",
      "ar": "تطوير موقع تعريفي جديد لشركة Coredex Solutions."
    },
    "role": {
      "en": "I developed the new website as a full-time software developer at Coredex Solutions.",
      "ar": "طورت الموقع الجديد بصفتي مطور برمجيات بدوام كامل في Coredex Solutions."
    },
    "delivered": [
      {
        "en": "Development of a new corporate website.",
        "ar": "تطوير موقع تعريفي جديد للشركة."
      }
    ],
    "outcome": {
      "en": "The new version is not yet published. No preview or private assets are shared here.",
      "ar": "الإصدار الجديد غير منشور بعد. لا تُعرض هنا معاينة أو أصول خاصة بالمشروع."
    },
    "scope": {
      "en": "Unpublished corporate website",
      "ar": "موقع شركة غير منشور"
    },
    "category_label": {
      "en": "Web development",
      "ar": "تطوير الويب"
    }
  },
  "built-up-maintenance": {
    "title": {
      "en": "Built Up website improvements",
      "ar": "تحسينات موقع Built Up"
    },
    "category": "web",
    "art": "web",
    "context": {
      "en": "At Coredex",
      "ar": "ضمن Coredex"
    },
    "tags": [
      "Website updates",
      "Maintenance"
    ],
    "summary": {
      "en": "Customer website updates and improvements delivered through Coredex Solutions.",
      "ar": "تحديثات وتحسينات لموقع عميل ضمن العمل في Coredex Solutions."
    },
    "purpose": {
      "en": "Maintain and improve an existing customer website.",
      "ar": "صيانة وتحسين موقع قائم لأحد العملاء."
    },
    "role": {
      "en": "I implemented updates and improvements to the Built Up company website as part of my Coredex role.",
      "ar": "نفذت تحديثات وتحسينات لموقع شركة Built Up ضمن دوري في Coredex."
    },
    "delivered": [
      {
        "en": "Updates and improvements to the customer website.",
        "ar": "تحديثات وتحسينات لموقع العميل."
      }
    ],
    "outcome": {
      "en": "Contributed updates to the Built Up website through Coredex Solutions.",
      "ar": "المساهمة بتحديثات لموقع Built Up من خلال Coredex Solutions."
    },
    "scope": {
      "en": "Website maintenance",
      "ar": "صيانة موقع"
    },
    "category_label": {
      "en": "Web development",
      "ar": "تطوير الويب"
    }
  },
  "hashnet-wordpress": {
    "title": {
      "en": "HashNet website maintenance",
      "ar": "صيانة مواقع HashNet"
    },
    "category": "web",
    "art": "wordpress",
    "context": {
      "en": "Employment project",
      "ar": "ضمن وظيفة"
    },
    "tags": [
      "WordPress",
      "Backups",
      "Technical support"
    ],
    "summary": {
      "en": "WordPress builds, content administration, backups, and ongoing technical support.",
      "ar": "تطوير مواقع WordPress وإدارة المحتوى والنسخ الاحتياطي والدعم الفني."
    },
    "purpose": {
      "en": "Build and maintain client websites at HashNet.",
      "ar": "تطوير وصيانة مواقع العملاء لدى HashNet."
    },
    "role": {
      "en": "I created and maintained more than 11 WordPress websites during my part-time role.",
      "ar": "طورت وصنت أكثر من 11 موقع WordPress خلال عملي بدوام جزئي."
    },
    "delivered": [
      {
        "en": "WordPress website development and updates.",
        "ar": "تطوير مواقع WordPress وتحديثها."
      },
      {
        "en": "Backups, content administration, and technical support.",
        "ar": "النسخ الاحتياطي وإدارة المحتوى والدعم الفني."
      }
    ],
    "outcome": {
      "en": "Created and maintained more than 11 WordPress websites, as recorded in my latest CV.",
      "ar": "تطوير وصيانة أكثر من 11 موقع WordPress وفق السيرة الذاتية الأحدث."
    },
    "scope": {
      "en": "A collection of employment projects",
      "ar": "مجموعة مشاريع ضمن وظيفة"
    },
    "period": "2023–2024",
    "category_label": {
      "en": "Web development",
      "ar": "تطوير الويب"
    }
  },
  "dxn-billing-tool": {
    "title": {
      "en": "DXN Taksim billing tool",
      "ar": "أداة فواتير DXN Taksim"
    },
    "category": "automation",
    "art": "accounting",
    "context": {
      "en": "Employment project",
      "ar": "ضمن وظيفة"
    },
    "tags": [
      "Billing",
      "Points calculation"
    ],
    "summary": {
      "en": "A points-calculation tool for billing, developed to automate a manual process.",
      "ar": "أداة لحساب نقاط الفواتير، طُورت لأتمتة عملية يدوية."
    },
    "purpose": {
      "en": "Replace manual billing-points calculations with a dedicated tool.",
      "ar": "استبدال حساب نقاط الفواتير يدوياً بأداة مخصصة."
    },
    "role": {
      "en": "I developed the points-calculation tool during my software development role at DXN Taksim.",
      "ar": "طورت أداة حساب النقاط خلال عملي مطور برمجيات في DXN Taksim."
    },
    "delivered": [
      {
        "en": "A points-calculation tool for billing.",
        "ar": "أداة لحساب نقاط الفواتير."
      }
    ],
    "outcome": {
      "en": "Delivered a tool to automate billing-points calculations.",
      "ar": "تطوير أداة لأتمتة حساب نقاط الفواتير."
    },
    "scope": {
      "en": "Earlier employment project",
      "ar": "مشروع وظيفي سابق"
    },
    "category_label": {
      "en": "Automation & integrations",
      "ar": "الأتمتة والتكاملات"
    }
  },
  "dxn-daily-accounting": {
    "title": {
      "en": "DXN Taksim daily accounting",
      "ar": "المحاسبة اليومية في DXN Taksim"
    },
    "category": "systems",
    "art": "accounting",
    "context": {
      "en": "Employment project",
      "ar": "ضمن وظيفة"
    },
    "tags": [
      "Accounting",
      "Process digitization"
    ],
    "summary": {
      "en": "A digital accounting system replacing a paper-based daily process.",
      "ar": "نظام محاسبة رقمي يحل محل عملية يومية قائمة على الورق."
    },
    "purpose": {
      "en": "Move a paper-based accounting process into a digital system.",
      "ar": "نقل عملية محاسبية قائمة على الورق إلى نظام رقمي."
    },
    "role": {
      "en": "I developed a digital accounting system with daily calculations at DXN Taksim.",
      "ar": "طورت نظام محاسبة رقمياً بحسابات يومية في DXN Taksim."
    },
    "delivered": [
      {
        "en": "A digital accounting system with daily calculations.",
        "ar": "نظام محاسبة رقمي مع حسابات يومية."
      }
    ],
    "outcome": {
      "en": "Converted paper-based accounting into a digital daily accounting process.",
      "ar": "تحويل المحاسبة الورقية إلى عملية محاسبية رقمية يومية."
    },
    "scope": {
      "en": "Earlier employment project",
      "ar": "مشروع وظيفي سابق"
    },
    "category_label": {
      "en": "Business systems",
      "ar": "أنظمة الأعمال"
    }
  }
}
PROJECTS_JSON, true, 512, JSON_THROW_ON_ERROR);
$categories = json_decode(<<<'CATEGORIES_JSON'
{"systems":{"en":"Business systems","ar":"أنظمة الأعمال"},"mobile":{"en":"Mobile applications","ar":"تطبيقات الجوال"},"web":{"en":"Web development","ar":"تطوير الويب"},"automation":{"en":"Automation & integrations","ar":"الأتمتة والتكاملات"}}
CATEGORIES_JSON, true, 512, JSON_THROW_ON_ERROR);
$featured = ['runners-erp', 'dxn-calculator', 'musaaid-quiz-platform', 'hashnet-cms'];

$caseStudySlugs = ['runners-erp', 'dxn-calculator', 'dxn-deposits', 'musaaid-quiz-platform', 'hashnet-cms'];
