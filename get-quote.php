
<?php

// I made the quotes array static you can get it by file or database.
$quotes = [[
    "quoteText" => "Genius is one percent inspiration and ninety-nine percent perspiration.",
    // "quoteAuthor" => "Thomas Edison",
], [
    "quoteText" => "You can observe a lot just by watching.",
    // "quoteAuthor" => "Yogi Berra",
], [
    "quoteText" => "A house divided against itself cannot stand.",
    // "quoteAuthor" => "Abraham Lincoln",
], [
    "quoteText" => "Keep calm and Stay HOME",
    // "quoteAuthor" => "Johann Wolfgang von Goethe",
], [
    "quoteText" => "Fate is in your hands and no one elses.",
    // "quoteAuthor" => "Byron Pulsifer",
], [
    "quoteText" => "Worry is like a rocking chair: It gives you something to do but never gets you anywhere.",
    // "quoteAuthor" => "Lao Tzu",
], [
    "quoteText" => "Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less.",
    // "quoteAuthor" => "Carl Sandburg",
], [
    "quoteText" => "Don't worry 'bout a thing, cause every little thing's gonna be alright.",
    // "quoteAuthor" => "Aristotle",
], [
    "quoteText" => "Often when you think you're at the end of something, you're at the beginning of something else.",
    // "quoteAuthor" => "Yogi Berra",
], [
    "quoteText" => "If you have never failed, you have never been tested, and then you haven't seen your best yet. A setback is only an opportunity for you to come back stronger.",
    // "quoteAuthor" => "Margaret Sangster",
], [
    "quoteText" => "Peace comes from within. Do not seek it without.",
    // "quoteAuthor" => "Buddha",
], [
    "quoteText" => "Prevention is the best cure.",
    // "quoteAuthor" => "Margaret Sangster",
], [
    "quoteText" => "Stay HOME, Stay SAFE, Stay STRONGER.",
    // "quoteAuthor" => "Margaret Sangster",
]];

shuffle($quotes);
// echo for authore name :  <br/> <i>- {$quotes[0]['quoteAuthor']}</i>

echo "\"{$quotes[0]['quoteText']}\"";
