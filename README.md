# Laravel 9 更改使用者電子郵件時發送電子郵件

如果你在給定模型上監聽多個事件，你可以使用觀察者來組織你的所有監聽器到單一個類別。觀察者類別有個方法名稱，會反射你想監聽的 `Eloquent` 事件。這些方法中的每一個都會接收模型作為它們的參數。

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
- 執行安裝 Laravel Mix 引用的依賴項目，並執行所有 Mix 任務。
```sh
$ npm install && npm run dev
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。
- 你可以經由 `/profile` 來進行電子郵件更改。

----
## 畫面截圖
![](https://i.imgur.com/SHBKxG0.png)
> 要註冊一個觀察者，在使用者的模型上使用觀察方法

![](https://i.imgur.com/7356JOw.png)
> 更改使用者電子郵件時接送電子郵件