﻿<?php
if (in_array($userID, $admins)){
 if($msg =="help" || $msg=="Help" || $msg=="راهنما" || $msg=="/help" || $msg=="!help"){
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "
❄️ راهنمای ربات سلف :
⭐️ <code>/bot</code> [on] | [off]
• خاموش و روشن کردن ربات
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>ping</code>
• دریافت وضعیت ربات
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/chats</code>
•دریافت آمار گروه ها و کاربران
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>typing on</code>
• فعال شدن حالت تایپینگ بعد از هر پیام 
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>typing off</code>
• غیرفعال شدن حالت تایپینگ بعد از هر پیام
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>markread on</code>
• فعال شدن حالت خوانده شدن پیام ها
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>markread off</code>
• غیرفعال شدن حالت خوانده شدن پیام ها
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>flood</code> [NUMBER] [TEXT]
•  اسپم پیام در یک متن
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>spam</code> [NUMBER] [TEXT]
•  اسپم پیام در متن های مجزا
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/pv</code> [NUMBER] [@id]
•  اسپم پیام در پیوی  متن های مجزا
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/start</code> [NUMBER] [@idbot]
•  اسپم پیام درپیوی ربات با متن 
(/start)
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>contacts on</code>
• فعال شدن حالت ادد شدن مخاطبین به صورت خودکار
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>contacts off</code>
• غیرفعال شدن حالت ادد شدن مخاطبین به صورت خودکار
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>adduser</code>  [UserID] [IDGroup]
• ادد کردن یه کاربر به گروه موردنظر
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>setusername</code> [text] 
• تنظیم نام کاربری (آیدی) ربات
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>profile</code> [NAME] | [LAST] | [BIO]
• تنظیم نام اسم , فامیل و بیوگرافی ربات 
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/like</code> [TEXT]
• ساخت متن با دکمه لایک
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/gif</code> [TEXT-EN]
• جستجو و ارسال گیف
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/pic</code>  [TEXT-EN] 
• جستجو و ارسال عکس
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/voice</code>  [TEXT] 
• جستجوی ویس و تیکه آهنگ در ملوبات
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/poker</code>  [on] | [off]
• فعال سازی | غیرفعال سازی حالت ارسال پوکر
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/blue</code>  [TEXT-EN]
• تبدیل متن انگلیسی به فنت Blue
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/hidden</code>  [TEXT] | [@username]
•  ساخت متن مخی که فقط توسط فردی خاص قابل مشاهده باشد!
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/translate</code>  [TEXT]
• ترجمه متن فارسی و انگلیسی
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/short</code>  [URL]
• کوتاه کننده لینک
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/sticker</code>  [TEXT]
• تبدیل متن به استیکر
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/time</code>  [Time-Zone-EN] (iran)
• دریافت ساعت و تاریخ محلی
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>block</code>  [@username] 
• بلاک کردن شخصی خاص در ربات
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>unblock</code>  [@username] 
• آزاد کردن شخصی خاص از بلاک در ربات
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/info</code>  [@username] 
• دریافت اطلاعات کاربر
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/sessions</code>
• دریافت بازنشست های فعال اکانت
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/save</code> [REPLAY]
• سیو کردن پیام و محتوا  در پیوی خود ربات
〰〰〰〰〰〰〰〰〰〰
🍃#بخش_تنظیم_جواب_سریع :

⭐️ <code>/setanswer</code> [TEXT] | [ANSWER]
• افزودن جواب سریع (متن اول متن دریافتی از کاربر و ددوم جوابی که ربات بدهد)
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/delanswer</code> [TEXT]
• حذف جواب سریع 
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/clean answers</code>
• حذف همه جواب سریع ها
〰〰〰〰〰〰〰〰〰〰
⭐️ <code>/answerlist</code>
• لیست همه جواب سریع ها
",'parse_mode' => 'html']);
}
 
}
