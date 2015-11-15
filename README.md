# Description
This Wordpress plugin will help you to embed widgets of different Steam and Steam Greenlight games and apps in your posts and pages.

**Current version:** 1.3  
**License:** MIT License

## Installation

**Using GitHub Updater:**  
1. Install [GitHub Updater](https://github.com/afragen/github-updater);  
2. In Wordpress Dashboard go to "Settings" -> "GitHub Updater" and press "Instal Plugin";  
3. Paste `rulait/wp-steam-shortcode` in the "Plugin URI" field;  
4. Wait for the downloading ending and activate the plugin.

**Manually (not recommended):**  
1. Download the [archive](https://github.com/ruLait/wp-steam-shortcode/archive/master.zip);  
2. In Wordpress Dashboard go to "Plugins" -> "Add new" and press "Upload";  
3. Upload the archive, wait till the upload ends and activate the plugin.

## Using
Steam Store item id is store.steampowered.com/app/**362890**/  
Steam Greenlingh item id is steamcommunity.com/sharedfiles/filedetails/?id=**322167876**
 
* `[steam type="store" item="620"]` (or simple `[steam item="620"]`):  
![Screenshot 1](https://i.imgur.com/2XumbSh.png)
* `[steam type="greenlight" item="148632585"]`:  
![Screenshot 2](https://i.imgur.com/Yt7HPGx.jpg)

By default, the Store widget [&#60;iframe&#62;](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe) width is 100%, but you can change it using the "width" attribute [(see syntax here)](https://developer.mozilla.org/en-US/docs/Web/CSS/width#Syntax). Greenligt widget &#60;iframe&#62; width cannot be changed,  unfortunately. For example - `[steam item="377160" width="450px"]`:  
![Screenshot 3](https://i.imgur.com/CkWCu4k.jpg)  

You can also change the ["id"](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/id) and ["class"](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/class) attributes (by default is "wp-steam-shortcode"). For example - `[steam item="271590" id="gtav" class="gtav-steam-widget"]`.

---
ruLait, 2015. Contact - lait@cojam.ru.