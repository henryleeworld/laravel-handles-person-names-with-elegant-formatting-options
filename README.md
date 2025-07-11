# Laravel 12 使用優雅的格式選項處理人名

引入 hosmelq 的 name-of-person 套件來擴增使用優雅的格式選項處理人名，在多種表示格式之間轉換名稱。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/person-name` 來進行人名處理。

----

## 畫面截圖
![](https://i.imgur.com/rKRs8L7.png)
> 姓氏是個人所屬家族制度之表徵和符號，每一個姓氏都有意味深長的歷史淵源；名字代表個人，是父母對孩子的期待寄託，有時也具有某種紀念或是蘊含特殊含義，不同年代亦會伴隨著當代的映照
