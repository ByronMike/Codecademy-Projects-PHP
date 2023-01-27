<!-- In this project, we’ll use PHP to write a function to fill in a Mad Libs story! Mad Libs are short stories with blank spaces, which get filled in by the user. The result is usually funny (or strange). -->

<?php

function generateStory($singlar_noun, $verb, $color, $distance_unit){
  $story = "\nThe $singlar_noun are lovely, $color, and deep.\n
But I have promises to keep,\n
And $distance_unit to go before I $verb,\n
And $distance_unit to go before I $verb.\n\n";

return $story;
}

echo generateStory("dog", "eat", "purple", "10 meters");
echo generateStory("car", "cook", "vermilion", "10 meters");
echo generateStory("empty void", "speak", "beige", "10 meters");

