# html_template
ver4.2.1

ver4.0.0より、SassのコンパイラがDartSassになりました。※node-sass（LibSass）が非推奨となったため
名前空間の利用が必要となり、グローバル変数・汎用Mixin等には g.$●●●● でアクセスします。

例：
@include max-screen($bp-sp) {} // node-sass（LibSass）
↓
@include g.max-screen(g.$bp-sp) {} // DartSass


■コンパイルコマンド
npm run sass

※最初に、下記コマンドにてをnpmモジュールをインストールする必要があります。 
npm install

※Node.jsがない場合は、下記URLより環境設定をしてください。 
https://ics.media/entry/3290/ 


Copyright (c) 2021 Yoshiki Yamada
Released under the MIT license
https://opensource.org/licenses/mit-license.php