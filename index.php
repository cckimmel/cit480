<!-- Navigation -->
<script type="text/javascript">
(function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);
</script>
<nav id="slide-menu">
	<ul>
		<li class="timeline">Timeline</li>
		<li class="events">Events</li>
		<li class="calendar">Calendar</li>
		<li class="sep settings">Settings</li>
		<li class="logout">Logout</li>
	</ul>
</nav>
<!-- Content panel -->
<div id="content">
	<div class="menu-trigger"></div>
	<h1>iOS style sliding menu</h1>
	<p>Here's an easy way to create an iOS style, side sliding menu.</p>
</div>