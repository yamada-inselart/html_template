# html_template
ver2.1.0

【Sassのコンパイルについて】
※ver2.1.0より、Sassのコンパイル方法が変わりました。

■Rubyでのコンパイル
sass --watch ./src/sass:./assets/css --style expended


■gulpでのコンパイル ※推奨
npx gulp watch

※最初に、下記コマンドにてgulpをインストールする必要があります。
npm init -y
npm install gulp gulp-sass gulp-babel @babel/core @babel/preset-env --save-dev

---コマンドについて---
・package.jsonファイルの生成
npm init -y

・gulpのインストール（ローカル環境）
npm install --save-dev gulp

・gulp-sassのインストール
npm install gulp-sass --save-dev

・Babelのインストール
npm install --save-dev gulp-babel @babel/core @babel/preset-env


※Node.jsがない場合は、下記URLより環境設定をしてください。
https://ics.media/entry/3290/