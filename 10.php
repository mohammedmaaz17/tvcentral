    USN:mohammed maaz khan

<?php
header('Content-Type:text/plain');
$allTheStates="missippi alabama Texas Masachussets Kansas";
$statesArray=[];
$states1=explode(' ', $allTheStates);
$i=0;
foreach($states1 as $state)
{
if(preg_match('/xas$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
print"\n the words that end in xas:".$state;
}
}
foreach($states1 as $state)
{
if(preg_match('/^[kK].*[sS]$/i',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo"\n the words that begin with k and end with s:".$state;
}
}
foreach($states1 as $state)
{
if(preg_match('/^[mM].*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo"\n the words that begin with m and end with s:".$state;
}
}
foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo"\n the words that end with a:".$state;
}
}
print("\n \n Variable states array");
foreach($statesArray as $element=>$value)
{
print("\n element ".$element.":".$value);
}
?>