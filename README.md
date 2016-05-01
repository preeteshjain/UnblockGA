# UnblockGA - Google Analytics Unblocker

We all know that majority of Ad blockers today, block the [Google Analytics](http://analytics.google.com) tracking, some by default and some by just enabling a simple setting. This results in uncounted views and stats from the ad-block users. More than 10 million websites rely on Google Analytics to collect the analytical data of their users.

According to [this post](https://www.quantable.com/analytics/how-many-users-block-google-analytics), these are some of the top blockers:

![Google Analytics Block Stats](http://i.imgur.com/UjWJz8G.png)

UnblockGA is here to help these websites by allowing them to collect the data from adblock users.

## How to use UnblockGA?

After downloading the two UnblockGA files, `unblockga.js` (or `unblockga.min.js`) and `unblockga.php`, follow these instructions:

Place this code on the webroot of your server:
```html
<script src="unblockga.min.js"></script>
<script type="text/javascript">
    UnblockGA.load({
        trackingId: 'UA-XXXXXX-X'
    });
</script>
```
*Note: Replace `UA-XXXXXX-X` with your own [Google Analytics Tracking ID](https://support.google.com/analytics/answer/1032385?hl=en).*

Assuming you've put the `unblockga.min.js` and `unblockga.php` in the same directory as your `index.html` or `index.php`.