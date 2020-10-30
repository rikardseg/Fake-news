<?php

declare(strict_types=1);

// These are my arrays, one containing authors and one with articles.

$authors = [
    ['id' => 2, 'name' => 'Mr Coffee'],
    ['id' => 1, 'name' => 'Dwight K Schrute'],
    ['id' => 3, 'name' => 'Jim Halpert'],
    ['id' => 4, 'name' => 'Michael Scott'],
    ['id' => 5, 'name' => 'Pam Beesly'],
];

$articles = [
    [
        'title' => "Don't Smile",
        'img' => 'img/dwight.jpg',
        'content' => 'When someone smiles at me, all I see is a chimpanzee begging for its life. Black est decaffeinated instant, turkish cultivar sugar wings single shot.<br> Aromatic, fair trade flavour froth as variety grinder crema foam beans ut medium. <p>Caramelization mug in carajillo, coffee carajillo redeye strong a white. Plunger pot cappuccino, medium, crema est americano mazagran, robust aged decaffeinated con panna rich.</p>',
        'authors_id' => 1,
        'published_date' => "2013-8-19",
        'alt' => 'Dwight',
        'like counter' => 43
    ],

    [
        'title' => 'Christmas Fear',
        'img' => 'img/dwight2.jpg',
        'content' => "In the end, the greatest snowball isn’t a snowball at all. It’s fear. Merry Christmas. Of course, martial arts training is relevant… Uh, I know about a billion Asians that would beg to differ… You know what, you can go to hell, and I will see you there. Burning!",
        'authors_id' => 1,
        'published_date' => "2013-9-15",
        'alt' => 'Dwight talking about christmas',
        'like counter' => 55
    ],

    [
        'title' => 'Caught In The Act',
        'content' => "I love catching people in the act. That’s why I always whip open doors. To avoid illness, expose yourself to germs, enabling your immune system to develop antibodies. I don’t know why everyone doesn’t do this… Maybe they have something against living forever.",
        'img' => 'img/mrcoffee.jpg',
        'authors_id' => 2,
        'published_date' => "2013-9-27",
        'alt' => 'Coffee',
        'like counter' => 42
    ],

    [
        'title' => 'Creamy Coffee',
        'content' => "As café au lait cinnamon latte a crema aftertaste. Crema froth medium, froth blue mountain robusta kopi-luwak frappuccino. Robusta pumpkin spice id mug, to go, con panna id crema galão trifecta. <p>Saucer, ristretto flavour americano espresso carajillo plunger pot coffee. Mazagran chicory crema grounds, mug organic rich redeye cappuccino robusta plunger pot.</p>",
        'img' => 'img/mrcoffee2.jpg',
        'authors_id' => 2,
        'published_date' => "2013-10-5",
        'alt' => 'Coffee',
        'like counter' => 37
    ],

    [
        'title' => 'Idiot-proof',
        'content' => "Before I do anything, I ask myself... 'Would an idiot do that?' And if the answer is yes, I do not do that thing. A affogato sugar, roast frappuccino, grounds caramelization seasonal cappuccino mocha. <p>Crema, mug, filter french press, dark seasonal coffee beans qui single shot cup milk. Crema, percolator rich viennese foam eu grounds grinder. Saucer, cup siphon, as black strong half and half barista mocha cream.</p>",
        'img' => 'img/dwightjim.jpg',
        'authors_id' => 3,
        'published_date' => "2013-10-22",
        'alt' => 'Dwight and Jim sitting together',
        'like counter' => 50
    ],

    [
        'title' => 'Loyalty',
        'content' => "Would I ever leave this company? Look, I'm all about loyalty. In fact, I feel like part of what I'm being paid for here is my loyalty. But if there was somewhere else that valued loyalty more highly, I'm going wherever they value loyalty the most.",
        'img' => 'img/dwight3.jpg',
        'authors_id' => 3,
        'published_date' => "2014-1-17",
        'alt' => 'Dwight peaking from behind the blinders',
        'like counter' => 35
    ],

    [
        'title' => "Mozart's Friend",
        'content' => "I have been Michael's number two guy for about five years. And we make a great team. We're like one of those classic famous teams. He's like Mozart and I'm like... Mozart's friend. <p>No. I'm like Butch Cassidy and Michael is like... Mozart. You try and hurt Mozart? You're gonna get a bullet in your head, courtesy of Butch Cassidy.</p>",
        'img' => 'img/michael.jpg',
        'authors_id' => 4,
        'published_date' => "2014-3-5",
        'alt' => 'Michael Portrait',
        'like counter' => 23
    ],

    [
        'title' => 'Water Cooler Gossip',
        'content' => "It’s a real shame because studies have shown that more information gets passed through water cooler gossip than through official memos. Which puts me at a disadvantage because I bring my own water to work.",
        'img' => 'img/michael2.jpg',
        'authors_id' => 4,
        'published_date' => "2015-6-8",
        'alt' => 'Michael being uncomfortable',
        'like counter' => 15
    ],

    [
        'title' => 'Accidentally Hurt',
        'content' => "It’s better to be hurt by someone you know accidentally, than by a stranger on purpose. Filter plunger pot sugar extraction roast caffeine body grinder variety caffeine. <p>Wings, frappuccino, cortado chicory, coffee, medium galão aged frappuccino at cortado medium. Beans, at robusta aftertaste strong barista coffee aroma barista doppio.</p>",
        'img' => 'img/jim.jpg',
        'authors_id' => 5,
        'published_date' => "2015-4-13",
        'alt' => 'Jim looking at camera',
        'like counter' => 22
    ],

    [
        'title' => 'The Power of Nostalgia',
        'img' => 'img/pam.jpg',
        'content' => "People underestimate the power of nostalgia. Nostalgia is truly one of the greatest human weaknesses, second only to the neck. Kopi-luwak fair trade carajillo, and to go grounds fair trade skinny siphon extraction. Lungo, coffee cortado beans spoon breve single origin.",
        'authors_id' => 5,
        'published_date' => "2016-5-11",
        'alt' => 'Pam looking at camera',
        'like counter' => 37
    ],
];
