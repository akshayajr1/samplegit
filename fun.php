<?php
function getAuthor()
{
    return "charles Dikens";
}

function bookByAuthorYear($authorName, $year= 1910)
{
    echo "this will list all the books written by ". $authorName."in year" .$year;
}
$year= 1920;
$authorName= getAuthor();

bookByAuthorYear($authorName, $year);

?>