# Fake-news

Welcome to Fake News, a website containing 10 fake news articles written by 5 different authors.
The website is built using PHP, CSS, HTML and Bootstrap.

# Installation

1. Clone the repository using either the command line or github desktop.
2. If you use github desktop you can navigate to https://github.com/rikardseg/Fake-news. 
Press "Code" and in the dropdown menu you choose "Open with Github Desktop". From github desktop you can open in visual studio code.
If you are in the command line you can type git clone https://github.com/rikardseg/Fake-news
3. Navigate to your Fake-news folder in the command line using "cd fake-news".
4. Type php -S localhost:8000 in your command line to open a server.
5. Visit localhost:8000 in your browser.

# Code Review

DATA.PHP

<strong>data.php: 8-9</strong> Might consider switching these two rows so that the first ID comes before the seoncd.

<strong>data.php: 19,48, 58, 78, 98</strong> You seam to have a left over P tag here, might wanna consider moving it out of the array and keep in the DOM instead.

<strong>data.php: 22</strong> You have nice detailed alt tags for all images of dwight, but here you have it listed as plain "Dwight". Might wanna be a bit more discriptive here.


FUNCTIONS.PHP

<strong>functions.php: 14</strong> Might wanna split the comment into two rows for increased readabillity. I would also recomend adding the explenatory comments to go before the funtion instead of after, but that's a matter of preference.


INDEX.PHP

<strong>index.php: 15-17</strong> Remember that CSS reads top->bottom. Make sure that your imported CSS is always loaded above your own so that it doesn't overwrite your own deign specs.

<strong>index.php: 12-22</strong> Might wanna split this into a header.php and include it in order to make it
slightly easier to navigate (though it's still pretty good in my book).

<strong>index.php: 26,28 </strong> I'd recommend you use the article element instead of the first div in your foreach as a container. Better semantics that way.

<strong>index.php: 28,40 </strong> Avoid using "style" attribute as much as possible, as it overwrites media queries. Include them in your own css document and link it in instead. Look over the use of the "i" element here. If you are looking for a way to display your text in italic,
try switching to the "em" element instead for proper semantics.

<strong>index.php: 29,31 </strong> would it be possible to merge these containers to a singlle one?


STYLE.CSS

<strong>style.css: 16</strong> Overwritten by bootstrap (index.php: 16)

<strong>index.php: 20</strong> Remember: 18px is recomended for desktop mode, but 16px is recomended for mobiles.

<strong>index.php: 28</strong> I would recomend switch out padding to margin here. Padding are used to spacs items within an element, while margin are used in other cases.


FINAL NOTES

Nice work with the site. I'm amazed over how clean you managed to keep your code and structure. I like how you
work with the "endforeach;" method instead of curly brackets when mixing coding langugges. If you got time,
I'd recomend you add a media query for the article element as 320px feels a bit thin on desktop. Well done mate!

&dash; Joey Jay, <time>30-10-2020, 17:10</time>
# Testers

Felix Östergren, Simon Lindstedt