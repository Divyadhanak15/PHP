/* 14.Create a PHP program that uses echo to display the following text with proper formatting:
Line1
       Line2
             Line3 
*/
<style>
#a1
{
	display: flex;
}
#a2
{
	margin-left:2em;
	display: flex;
}
#a3
{
	margin-left:4em;
	display: flex;
}
</style>
<?php
echo "<ol>
		<li id =a1>List1</li>
		<li id =a2>List2</li>
		<li id =a3>List3</li>
	</ol>";

?>