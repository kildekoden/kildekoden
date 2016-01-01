/**
 * Common scripts for GHREPO.info.
 * @author Chris Vogt [mail@chrisvogt.me]
 */
$(function() {
	/**
	 * Hide the "start here" marker on form focus.
	 */
	 $('#lookupUserrepo').focus(function() {
	 	$('#starthere').fadeOut();
	 });

    /**
     * Verify the input is in the correct format.
     */
    $('#lookupUserrepo').keyup(function() {
        $('span.keyup').remove();
        var q = $(this).val();
        if (validateLookup(q)) {
            $('span.keyup').remove();
            $('#lookupUserrepo').tooltip('show');
            $(this).after('<span class="keyup invalid octicon octicon-bug"></span>');
            $('#lookupDisplayForm').submit(function(e) {
                return false;
            });
        } else {
            $(this).tooltip('hide');
            $(this).after('<span class="keyup valid octicon octicon-check"></span>');
            $('#lookupDisplayForm').submit(function(e) {
                window.location.href = "/gh/" + q;
            });
        }
    });
    /**
     * Validates the search query.
     * Should be in format: USERNAME/REPOSITORY
     * @param {string} s - form input
     */
    function validateLookup(s) {
        var queryString = /^[A-Za-z0-9._-]+\/[[A-Za-z0-9._-]+$/; // username/repo
        if (!queryString.test(s)) {
            return true;
        } else {
            return false;
        }
    }
});
