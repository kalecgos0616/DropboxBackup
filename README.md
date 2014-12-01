ci_dropbox
==========

Subject : 建置Web的管理介面for php
--------------


#功能:
1. 登入帳號採用linux user, 預設密碼為123
2. 首次登入可引導方式設定新密碼,Dropbox帳密認證,並檢核可否登入
3. 登入後功能
  * 列表目前備份的方式
  * 提供明細查詢
  * 可新增刪減修改費份時間週期
4. 記錄使用者每次登入記錄ip
5. 使用db去紀錄~~(原需求：僅使用file去記錄)~~
6. Dropbox空間額度檢核並發信通知
7. 每日背援通知記錄 早上0900發信（可通過後台檢核)
8. 使用Boostrap 3 為UI建置基礎
9. 盡可能使用Ajax技術
10. 存取權限檢查

#Resources:
1. Bootstrap可套用Template ~~http://www.sum16.com/resource/pixeladmin-premium-admin-theme-download.html~~<br/>
free：http://almsaeedstudio.com/AdminLTE/<br/>
http://startbootstrap.com/template-overviews/sb-admin-2/

2. CI 下載

*name path type size diatomite status recentbackuptime*
***

**type=gz,folder**  
> > status=啟用/關閉   

**有錯誤發生該row請使用_紅色_**

#工具：
1. Codeigniter
2. Dropbox API: https://www.dropbox.com/developers/core/start/php

######TEST:
```perl
use Data::Dumper;
print Dumper $bear;
```
[Imgur](http://i.imgur.com/9nMly70.jpg?1)

#Driver :
1.支援Dropbox api
2.百度api

test
