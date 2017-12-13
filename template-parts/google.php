<?php 

$ga_property = get_option( 'ga_property' );

if ($ga_property) { ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php print $ga_property ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php print $ga_property ?>');
</script>

<?php 
}
