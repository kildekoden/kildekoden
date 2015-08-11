/**
 * Common scripts for GHREPO.info.
 *
 * @author Chris Vogt [mail@chrisvogt.me]
 */
$(function() {
	/**
	 * Verify the input is in the correct format.
	 */
	$('#lookupUserrepo').keyup(function() {
	    $('span.keyup').remove();
	    $(this).after('<span class="keyup valid octicon octicon-check"></span>');
	    var inputVal = $(this).val();
	    var queryString = /^[A-Za-z0-9._-]+\/[[A-Za-z0-9._-]+$/;

	    if ( !queryString.test(inputVal) ) {
	    	$('span.keyup').remove();
        $(this).after('<span class="keyup invalid octicon octicon-bug"></span>');
	    }
	});
});

