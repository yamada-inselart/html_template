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
npm install gulp gulp-sass gulp-autoprefixer gulp-sourcemaps gulp-babel @babel/core  @babel/preset-env browser-sync --save-dev 

下記を、package.jsonに追加してください 
  "browsers": [ 
    "last 3 versions", 
    "ie >= 9", 
    "Android >= 4", 
    "ios_saf >= 8" 
  ] 
ここまで 


---コマンドについて--- 
・package.jsonファイルの生成 
npm init -y 

・gulpのインストール（ローカル環境） 
npm install --save-dev gulp 

・gulp-sassのインストール 
npm install --save-dev gulp-sass 

・gulp-autoprefixerのインストール 
npm install --save-dev gulp-autoprefixer 

・gulp-sourcemapsのインストール 
npm install --save-dev gulp-sourcemaps 

・Babelのインストール 
npm install --save-dev gulp-babel @babel/core @babel/preset-env 

・browser-syncのインストール 
npm install browser-sync --save-dev 


※Node.jsがない場合は、下記URLより環境設定をしてください。 
https://ics.media/entry/3290/ 