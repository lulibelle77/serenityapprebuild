DIYBUTTON PACK INSTALLATION
by Alex Mangini, for DIYthemes readers

Grab the HTML & short codes for these buttons here:

http://diythemes.com/thesis/30-free-css3-buttons-code/

----------------------------------------

Getting these buttons up on your site is easy. Because they
were primarily made in CSS3, there are barely any images. The
only button that requires use of an image is the arrow
button (http://diythemes.com/thesis/30-free-css3-buttons-code/#buttons_arrow).


The instructions to using these buttons on your site are below.

----------------------------------------

ADDING CSS

To add the button CSS to your site, open the file button.css
you received in the download and paste it into custom.css in
Thesis.

You can get to the custom.css file by logging into your WP
dashboard, going to Thesis - Custom File Editor or logging
into FTP and going to root/wp-content/themes/thesis_183/custom/


Once you add the CSS, save and upload the file to your server. You
can now use the HTML version of any button listed here:

http://diythemes.com/thesis/30-free-css3-buttons-code/

----------------------------------------

ENABLING SHORTCODES

To enable the short code versions for these buttons, open up
custom_functions.php in Thesis and paste the contents of the file
shortcode.php into it.

The custom_functions.php file is in the same directory as the CSS
file.

You can now use the shortcode versions of these buttons as well
in posts, pages and widgets:

http://diythemes.com/thesis/30-free-css3-buttons-code/

----------------------------------------

ICON BUTTONS

To use the icon buttons, upload the /fonts/ folder into your /custom/
folder in Thesis.

Once you upload the fonts, you can use any icon from this page as text:

http://www.justbenicestudio.com/studio/websymbols/

Each icon output is based off of a different letter in the alphabet. To
pick what icon you want to use, follow the URL above and pick.

If I wanted to create an orange button for my RSS link, I'd go to the link
above and find the RSS icon. To use the RSS icon, I need to use the letter "r"
So my codes would look like this:

html:
<a href="#link" class="icon orange"><span>r</span> Subscribe to my RSS feed</a>

shortcode:
[button type="icon" icon="r" color="orange" link="#"]Red Button[/button]

----------------------------------------

ARROW BUTTON

To use the arrow button, make sure you upload the image from the
/images/ folder you received in the download into the IMAGES
folder in Thesis