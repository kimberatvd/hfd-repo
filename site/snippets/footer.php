<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php echo js('assets/js/jquery-ias.min.js') ?>

<script>

$( ".intro-button" ).click(function() {
  $( "section.intro" ).slideToggle( 200, "linear", function() {
    // Animation complete.
  });
});

var ias = jQuery.ias({
  container:  '#allreviews',
  item:       '.review',
  pagination: '.pagination',
  next:       '.next',
});

</script>

</body>
</html>