/**
 * GitHub Repository Overview.
 *
 * @author Chris Vogt [mail@chrisvogt.me]
 */
$(function() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: endpoint,
        success: function(data) {
            $('#commits').empty()
                .html(renderTable(data));
        }
    });
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://api.github.com/repos/" + username + "/" + repository,
        success: function(data) {
            renderStats(data);
            renderDetails(data);
        }
    });

    /**
     * Builds the data table.
     *
     * @param {array} data - JSON data to parse.
     */
    function renderTable(data) {
        for (var i = 0; i < data.length; i++) {
            renderRow(data[i]);
        }
    }

    function renderDetails(data) {
    	$('p#desc').html(data['description']);
    }

    /**
     * Builds a table row.
     *
     * @param {array} data - Data for this row.
     */
    function renderRow(data) {
        var bio = data['author_username'] + ' on GitHub';
        $("#commits").append($('<tr>')
            .append($('<td>')
                .append($('<a>')
                    .attr('href', data['url'])
                    .attr('title', 'View commit on GitHub')
                    .text(data['sha'].substring(0, 6))
                )
            )
            .append($('<td>')
                .append($('<a>')
                    .attr('href', data['author_url'])
                    .attr('title', bio)
                    .html(
                        function () {
                            if (data['author_avatar']) {
                                return renderAvatar(data['author_avatar'], data['author_username'])
                                + ' ' + data['author_username'];
                            } else {
                                return ((data['author_username']) ? data['author_username'] : "<em>Undefined</em>");
                            }
                        }
                    )
                )
            )
            .append($('<td>')
                .text(moment(data['timestamp']).fromNow())
            )
            .append($('<td>')
                .text(data['message'].substring(0, 74) + '...')
            )
        );
    }

    /**
     * Renders the repo stats.
     *
     * @param (array) data - Returned from the GitHub API.
     */
    function renderStats(data) {
        $('.stat-watchers .count').html(data.watchers_count);
        $('.stat-forks .count').html(data.forks_count);
        $('.stat-stars .count').html(data.stargazers_count);
        $('.stat-issues .count').html(data.open_issues_count);
    }

    function renderAvatar(href, uname) {
        return '<img src="' + href + '" class="img img-circle" alt="' + uname + '\'s avatar" height="18px">';
    }
});
