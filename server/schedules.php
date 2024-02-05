<?php

return [
    'schedules' => 'الجداول الزمنية',
    'manage-schedules' => 'إدارة الجداول الزمنية',
    'create-schedule' => 'إنشاء جدول زمني',
    'name' => 'الاسم',
    'last-run-at' => 'آخر تشغيل في',
    'next-run-at' => 'التشغيل التالي في',
    'status' => 'الحالة',
    'active' => 'نشط',
    'inactive' => 'غير نشط',
    'processing' => 'جارٍ التنفيذ',
    'manage-schedule' => 'إدارة الجدول الزمني',
    'new-task' => 'مهمة جديدة',
    'run-now' => 'تشغيل الآن',
    'editBtn' => 'تعديل',
    'n/a' => 'غ/م',
    'never' => 'أبدًا',

    'no-schedules' => 'لا توجد جداول زمنية مكونة لهذا الخادم.',
    'ignore-files-folders' => 'تجاهل الملفات والمجلدات',
    'continues-on-failure' => 'المتابعة في حالة الفشل',
    'later' => 'لاحقًا',

    'minute' => 'الدقيقة',
    'hour' => 'الساعة',
    'day' => 'اليوم',
    'week' => 'الأسبوع',
    'day-of-month' => 'يوم الشهر',
    'month' => 'الشهر',
    'day-of-week' => 'يوم الأسبوع',

    'deleteTask' => [
        'title' => 'تأكيد حذف المهمة',
        'description' => 'هل أنت متأكد أنك تريد حذف هذه المهمة؟ لا يمكن التراجع عن هذا الإجراء.',
        'delete' => 'حذف المهمة'
    ],
    'delete' => [
        'title' => 'حذف الجدول الزمني',
        'description' => 'سيتم إزالة جميع المهام وسيتم إنهاء أي عمليات قيد التنفيذ.',
        'delete' => 'حذف'
    ],
    'edit' => [
        'title-1' => 'تعديل الجدول الزمني',
        'title-2' => 'إنشاء جدول زمني جديد',

        'description' => 'يدعم نظام الجداول الزمنية استخدام صيغة Cronjob عند تحديد وقت بدء تشغيل المهام. استخدم الحقول أعلاه لتحديد متى يجب بدء تشغيل هذه المهام.',
        
        'name' => 'اسم الجدول الزمني',
        'name-description' => 'تعريف قابل للقراءة لهذا الجدول الزمني.',
        'cheatsheet' => 'عرض الورقة الغش',
        'cheatsheet-description' => 'عرض ورقة الغش لـ Cron لبعض الأمثلة',
        'online-when-online' => 'فقط عندما يكون الخادم متصلاً بالإنترنت',
        'online-when-online-description' => 'تنفيذ هذا الجدول الزمني فقط عندما يكون الخادم في حالة تشغيل.',
        'enabled' => 'تم تمكين الجدول الزمني',
        'enabled-description' => 'سيتم تنفيذ هذا الجدول الزمني تلقائياً إذا تم تمكينه.',

        'save-changes' => 'حفظ التغييرات',
    ],
    'cheatsheet' => [
        'example' => 'أمثلة',
        'every-5-minutes' => 'كل 5 دقائق',
        'every-hour' => 'كل ساعة',
        'hour-range' => 'نطاق الساعة',
        'once-a-day' => 'مرة في اليوم',
        'every-monday' => 'كل اثنين',
        'special-characters' => 'رموز خاصة',
        'any-value' => 'أي قيمة',
        'value-list-separator' => 'فاصل قائمة القيم',
        'range-values' => 'قيم النطاق',
        'step-values' => 'قيم التدرج',
    ],
    'task' => [
        'message' => 'لا يمكن إنشاء مهمة نسخ احتياطي عندما يكون حد النسخ الاحتياطي للخادم مضبوطًا على 0.',
        'edit-task' => 'تحرير المهمة',
        'save-changes' => 'حفظ التغييرات',
        'create-task' => 'إنشاء مهمة',
        'action' => 'الإجراء',
        'send-command' => 'إرسال أمر',
        'send-power-action' => 'إرسال إجراء الطاقة',
        'create-backup' => 'إنشاء نسخة احتياطية',
        'offset' => 'إزاحة الوقت (بالثواني)',
        'offset-description' => 'مقدار الوقت الذي يجب الانتظار بعد تشغيل المهمة السابقة قبل تشغيل هذه المهمة. إذا كانت هذه هي المهمة الأولى في جدول زمني، فلن يتم تطبيق ذلك.',
        'payload' => 'حمولة',
        'ignored-files' => 'الملفات المتجاهلة',
        'ignored-files-description' => 'اختياري. تضمين الملفات والمجلدات المستبعدة في هذا النسخ الاحتياطي. بشكل افتراضي، سيتم استخدام محتويات ملف .pteroignore الخاص بك. إذا كنت قد وصلت إلى حد النسخ الاحتياطي الخاص بك، سيتم تدوير أقدم نسخة احتياطية.',
        'start-server' => 'تشغيل الخادم',
        'stop-server' => 'إيقاف الخادم',
        'restart-server' => 'إعادة تشغيل الخادم',
        'kill-server' => 'إنهاء الخادم',
        'continue-on-failure' => 'المتابعة في حالة الفشل',
        'continue-on-failure-description' => 'سيتم تشغيل المهام المستقبلية عند فشل هذه المهمة.',
    ],
];
