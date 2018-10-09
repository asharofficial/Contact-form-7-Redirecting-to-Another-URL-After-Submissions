First you need to update contact form 7 on new version i try it on v7.4.9 and then place a contact form short code in any page and place this JS script any where on page and change url where need to redirect your page after submission

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
location = 'http://example.com/';
}, false );
</script> 

For more info click contact form 7 official site https://contactform7.com/redirecting-to-another-url-after-submissions/

