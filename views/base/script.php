<script src="views/base/js/jquery-3.1.0.min.js" charset="utf-8"></script>
<script src="views/base/js/materialize.js" charset="utf-8"></script>
<script type="text/javascript">
// Initialize collapse button
$('.button-collapse').sideNav({
  menuWidth: 250, // Default is 240
  edge: 'left', // Choose the horizontal origin
  closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
}
);

// Initialize collapsible (uncomment the line below if you use the dropdown variation)
$('.collapsible').collapsible();


$(document).ready(function() {
  $('select').material_select();
});


</script>
</body>
</html>
