![Banner](http://i.imgur.com/Kq06UQI.png)

# UnblockGA - Google Analytics Unblocker

We all know that majority of Adblockers today, block [Google Analytics](http://analytics.google.com). Some by default and some by just enabling a setting. More than 10 million websites rely on Google Analytics to collect the analytical data of their users. One can imagine what would happen if it's blocked.

According to [this post](https://www.quantable.com/analytics/how-many-users-block-google-analytics), these are some of the top blockers:

| App / Extension | Platform | User Base (Dec 2015) | Blocks GA by default? |
|--------------------------|------------------|------------------------------------------------------|----------------------------------------------|
| AdBlock Plus | Cross-platform | 21M users (Firefox) 40M+ (Chrome) 300M total downloads | No, but easily added (one click post-install) |
| Adblock | primarily Chrome | 40M+ (Chrome) | No, but easily added. |
|  uBlock Origin | Cross-platform | 630k users (Firefox) 2.5M users (Chrome) | Yes |
| Ghostery | Cross-platform | 2.3M users (Chrome) 1.5M users (Firefox) | No, but easily added. |
| Purify | iOS | unknown, top 10 at launch* | Yes |
| Adblock Browser | Android | 1-5M installs | Yes |
| Google Analytics Opt-Out | Chrome | 720k users | Yes |

UnblockGA offers a simple, easy-to-implement workaround against these adblockers.

## Requirements<a name="requirements"></a>

UnblockGA is built with vanilla JavaScript and PHP. So [jQuery](http://jquery.com) is **not** required to run UnblockGA. However, on the server side of the equation, minimum version of PHP required is *4.0.2* which supports the [cURL library](https://curl.haxx.se) and it's functions. So basically, your server should be running PHP version 4.0.2 or higher.

## Download<a name="download"></a>

[Download the files](https://github.com/preeteshjain/UnblockGA/archive/v1.0.0.zip) and place them like so:

```
webroot/
├── index.html
├── unblockga.min.js
└── unblockga.php
```

If you're using a MVC framework, and can't directly send request to a PHP script (without proper routing) use the [`scriptLocation`](#scriptLocation) option.

## Usage<a name="usage"></a>

After downloading the two UnblockGA files, `unblockga.js` (or `unblockga.min.js`) and `unblockga.php`, follow these instructions:

- UnblockGA can be called with `.load()` function with appropriate argument, otherwise it won't work as expected.

- Place this JavaScript code anywhere on the webpage (you want to track):
   ```javascript
   UnblockGA.load({
     trackingId: 'UA-XXXXXX-X'
   }); 
   ```
   *Note: Replace `UA-XXXXXX-X` with your own [Google Analytics Tracking ID](https://support.google.com/analytics/answer/1032385?hl=en).*

- UnblockGA also supports some [*options*](#options). You might wanna check those out, to ensure proper working and enable logs.

Assuming you've put `unblockga.min.js` and `unblockga.php` in the same directory as your `index.html` or `index.php`.

## Options<a name="options"></a>

UnblockGA supports three options, which can be passed as arguments to the `.load()` function. These options are as follows:

| Option | Description | Default Value |
|------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|----------------------------------------------------------|
| `trackingId` | Sets the [Google Analytics Tracking ID](https://support.google.com/analytics/answer/1032385?hl=en). | *none* (throws a warning in console if logs are enabled) |
| `logs` | Option to enable/disable logs on the [Developer Tools](http://developer.chrome.com/devtools) console. | boolean, `false` |
| `scriptLocation`<a name="scriptLocation"></a> | Set the location of the PHP script if it's placed elsewhere (other than the webroot). This is a vital option to consider if you're using a MVC framework like [CakePHP](http://cakephp.org) or [CodeIgniter](https://www.codeigniter.com). | string, `unblockga.php` |

#### Examples

Using all the options:
```javascript
UnblockGA.load({
  trackingId: 'UA-XXXXXX-X',
  logs: true,
  scriptLocation: 'includes/unblockga.php'
}); 
```

## License<a name="license"></a>

```
MIT License

Copyright (c) 2016 Preetesh Jain

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

***

Follow me on Twitter [@preeteshjain](http://twitter.com/preeteshjain) for updates.
