<?php
/**
 * Plugin Name: admin refresh
 * plugin url: www.google.com
 *description:this is super plugin
 *version:1.0
 license: GPLV! or later
 */
 
 add_action("admin_menu", "addmenu");
 function addmenu()
 {
 	add_menu_page("example options", "example options", 4, "example options", "exampleMenu");
}	

function exampleMenu()
{
	echo "<center><h1>how are going Admin!!!</h1></center>";
	echo '<a href="http://www.addictinggames.com/sports-games/index.jsp"><h1>refresh yourself???</h1></a>';
	echo '<a href="https://www.youtube.com/watch?v=aJOTlE1K90k&list=PL6CTrxW12Bre4kny-OhqOEQwNjso0VKPc"><h1>In a mood for music???</h1></a>';
	echo '<a href="https://www.menulog.com.au/"><h1>order food???</h1></a>';
	echo "The time is " . date("h:i:sa");
}
